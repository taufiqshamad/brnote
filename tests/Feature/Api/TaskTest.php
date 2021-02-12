<?php

namespace Tests\Feature\Api;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\{Task, User};
use Illuminate\Support\Facades\{Hash, Auth};

class TaskTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    // private $task_id = NULL;
    // private $token = true;
    // private $user = NULL;
    public function auth(){
        $user = User::factory()->create();
        
        $data = [
            'email'=>$user->email,
            'password'=>'password'
        ];
        
        $response = $this->json('POST','/api/token', $data, [])
            ->assertJsonStructure([
                'token'
            ]);

        return [
            'token'=>$response['token'],
            'user_id'=>$user->id
        ];
    }

    public function delete_created_user($user_id)
    {
        return(User::find($user_id)->delete());
    }

    public function test_getToken()
    {
        $user = User::factory()->create();
        
        $data = [
            'email'=>$user->email,
            'password'=>'password'
        ];  
        
        $response = $this->json('POST','/api/token', $data, [])
            ->assertJsonStructure([
                'token'
            ]);
        $token = $response['token'];
        $this->assertTrue(!empty($token));
        $this->assertTrue($user->delete());
    }

    public function test_fetch_all_tasks()
    {
        $auth   = $this->auth();
        $token = $auth['token'];
        $user_id = $auth['user_id'];

        $response   = $this->withHeader('Authorization','Bearer '.$token)->json('get','/api/task')
            ->assertJsonStructure([
                'status_code',
                'tasks'
            ]);
        $this->assertTrue($this->delete_created_user($user_id));
    }

    public function test_create_new_task()
    {
        $auth   = $this->auth();
        $token = $auth['token'];
        $user_id = $auth['user_id'];

        $data = [
            'user_id'=>$user_id,
            'isActive'=>'1',
            'position'=>'Employee'
        ];

        $response = $this->withHeader('Authorization','Bearer '.$token)->json('post','/api/task', $data)
            ->assertJsonStructure([
                'status_code',
                'task'=>[
                    'id', 'user_id', 'isActive', 'position', 'created_at', 'updated_at'
                ]
            ]);
        $this->task_id = $response['task']['id'];
        $this->assertTrue(Task::find($response['task']['id'])->delete());
        $this->assertTrue($this->delete_created_user($user_id));
    }

    public function test_show_task()
    {
        $auth   = $this->auth();
        $token = $auth['token'];
        $user_id = $auth['user_id'];
        
        $task = new Task;
        $task->user_id = $user_id;
        $task->isActive = 1;
        $task->position = "Employee";
        $this->assertTrue($task->save());
        
        $response = $this->withHeader('Authorization','Bearer '.$token)->json('GET','/api/task/'.$task->id)
            ->assertJsonStructure([
                'status_code',
                'task'=>[
                    'id', 'user_id', 'isActive', 'position', 'created_at', 'updated_at'
                ]
            ]);
        $this->assertTrue($task->delete());
        $this->assertTrue($this->delete_created_user($user_id));
    }
    public function test_update_task()
    {
        $auth   = $this->auth();
        $token = $auth['token'];
        $user_id = $auth['user_id'];

        $task = new Task;
        $task->user_id = $user_id;
        $task->isActive = 1;
        $task->position = "Employee";
        $this->assertTrue($task->save());

        $data = [
            '_method'=>'PUT',
            'user_id'=>$user_id,
            'isActive'=>'1',
            'position'=>'Backend'
        ];

        $response = $this->withHeader('Authorization','Bearer '.$token)->json('POST','/api/task/'.$task->id, $data)
            ->assertJsonStructure([
                'status_code',
                'task'=>[
                    'id', 'user_id', 'isActive', 'position', 'created_at', 'updated_at'
                ]
            ]);
        $this->assertTrue($task->delete());
        $this->assertTrue($this->delete_created_user($user_id));
    }
    public function test_delete_task()
    {
        $auth   = $this->auth();
        $token = $auth['token'];
        $user_id = $auth['user_id'];

        $task = new Task;
        $task->user_id = $user_id;
        $task->isActive = 1;
        $task->position = "Employee";
        $this->assertTrue($task->save());

        $data = [
            '_method'=>'DELETE'
        ];

        $response = $this->withHeader('Authorization','Bearer '.$token)->json('POST','/api/task/'.$task->id, $data)
            ->assertJsonStructure([
                'status_code'
            ]);
        $this->assertTrue($task->delete());
        $this->assertTrue($this->delete_created_user($user_id));
    }
}
