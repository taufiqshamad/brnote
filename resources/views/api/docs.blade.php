<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('API Documentation') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden sm:rounded-lg">
                <div class="p-6 border-b border-gray-200">
                    <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 pr-10 lg:px-8">
                        <h1 class="text-2xl" id="task"># Get Token</h1>
                        <div class="align-middle inline-block min-w-full shadow overflow-hidden bg-white shadow-dashboard px-8 pt-3 rounded-bl-lg rounded-br-lg mb-10">
                            <table class="min-w-full">
                                <thead>
                                    <tr>
                                        <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">Method</th>
                                        <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">URI</th>
                                        <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">Body</th>
                                        <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">Response</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white">
                                    <tr>
                                        <td class="px-6 py-4 whitespace-no-wrap border-b text-blue-900 border-gray-500 text-sm leading-5">
                                            <span class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                                <span aria-hidden class="absolute inset-0 bg-green-200 opacity-50 rounded-full"></span>
                                                <span class="relative text-xs">POST</span>
                                            </span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                                            <div class="text-sm leading-5 text-blue-900"><pre>api/task</pre></div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500 text-sm leading-5">
                                            <table>
                                                <tr>
                                                    <td class="font-bold text-red-500">user_id</td>
                                                    <td width="50"></td>
                                                    <td class="px-3 py-1">Number</td>
                                                </tr>
                                                <tr>
                                                    <td class="font-bold text-red-500">isActive</td>
                                                    <td width="50"></td>
                                                    <td class="px-3 py-1">Boolean (0 or 1)</td>
                                                </tr>
                                                <tr>
                                                    <td class="font-bold text-red-500">position</td>
                                                    <td width="50"></td>
                                                    <td class="px-3 py-1">String</td>
                                                </tr>
                                            </table>
                                        </td>
                                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500 text-sm leading-5">
                                            <table>
                                                <tr>
                                                    <td class="font-bold text-green-500">API Token</td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <h1 class="text-2xl" id="task"># Task API</h1>
                        <div class="align-middle inline-block min-w-full shadow overflow-hidden bg-white shadow-dashboard px-8 pt-3 rounded-bl-lg rounded-br-lg">
                            <h6 class="font-semibold px-6 py-2 bg-yellow-100">Please Note that These API Requires Header <pre>Authorization : Bearer {API_TOKEN}</pre></h6>
                            <table class="min-w-full">
                                <thead>
                                    <tr>
                                        <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">Method</th>
                                        <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">URI</th>
                                        <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">Body</th>
                                        <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">Response</th>
                                        <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">Action</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white">
                                    
                                    <tr>
                                        <td class="px-6 py-4 whitespace-no-wrap border-b text-blue-900 border-gray-500 text-sm leading-5">
                                            <span class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                                <span aria-hidden class="absolute inset-0 bg-green-200 opacity-50 rounded-full"></span>
                                                <span class="relative text-xs">GET</span>
                                            </span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                                            <div class="text-sm leading-5 text-blue-900"><pre>api/task</pre></div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500 text-sm leading-5">(None)</td>
                                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500 text-sm leading-5">
                                            <table>
                                                <tr>
                                                    <td class="font-bold text-green-500">status_code</td>
                                                    <td width="50"></td>
                                                    <td class="px-3 py-1">200</td>
                                                </tr>
                                                <tr>
                                                    <td class="font-bold text-green-500">tasks</td>
                                                    <td width="50"></td>
                                                    <td class="px-3 py-1">Tasks JSON</td>
                                                </tr>
                                            </table>
                                        </td>
                                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500 text-sm leading-5">Fetch All Tasks</td>
                                    </tr>
                                    <tr>
                                        <td class="px-6 py-4 whitespace-no-wrap border-b text-blue-900 border-gray-500 text-sm leading-5">
                                            <span class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                                <span aria-hidden class="absolute inset-0 bg-green-200 opacity-50 rounded-full"></span>
                                                <span class="relative text-xs">POST</span>
                                            </span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                                            <div class="text-sm leading-5 text-blue-900"><pre>api/task</pre></div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500 text-sm leading-5">
                                            <table>
                                                <tr>
                                                    <td class="font-bold text-red-500">user_id</td>
                                                    <td width="50"></td>
                                                    <td class="px-3 py-1">Number</td>
                                                </tr>
                                                <tr>
                                                    <td class="font-bold text-red-500">isActive</td>
                                                    <td width="50"></td>
                                                    <td class="px-3 py-1">Boolean (0 or 1)</td>
                                                </tr>
                                                <tr>
                                                    <td class="font-bold text-red-500">position</td>
                                                    <td width="50"></td>
                                                    <td class="px-3 py-1">String</td>
                                                </tr>
                                            </table>
                                        </td>
                                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500 text-sm leading-5">
                                            <table>
                                                <tr>
                                                    <td class="font-bold text-green-500">status_code</td>
                                                    <td width="50"></td>
                                                    <td class="px-3 py-1">200</td>
                                                </tr>
                                                <tr>
                                                    <td class="font-bold text-green-500">task</td>
                                                    <td width="50"></td>
                                                    <td class="px-3 py-1">Created Task JSON</td>
                                                </tr>
                                            </table>
                                        </td>
                                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500 text-sm leading-5">Create New Task</td>
                                    </tr>
                                    <tr>
                                        <td class="px-6 py-4 whitespace-no-wrap border-b text-blue-900 border-gray-500 text-sm leading-5">
                                            <span class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                                <span aria-hidden class="absolute inset-0 bg-green-200 opacity-50 rounded-full"></span>
                                                <span class="relative text-xs">GET</span>
                                            </span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                                            <div class="text-sm leading-5 text-blue-900"><pre>api/task/{id}</pre></div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500 text-sm leading-5">(None)</td>
                                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500 text-sm leading-5">
                                            <table>
                                                <tr>
                                                    <td class="font-bold text-green-500">status_code</td>
                                                    <td width="50"></td>
                                                    <td class="px-3 py-1">200</td>
                                                </tr>
                                                <tr>
                                                    <td class="font-bold text-green-500">task</td>
                                                    <td width="50"></td>
                                                    <td class="px-3 py-1">Task JSON With <pre>id : {id}</pre></td>
                                                </tr>
                                            </table>
                                        </td>
                                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500 text-sm leading-5">Show Single Task</td>
                                    </tr>
                                    <tr>
                                        <td class="px-6 py-4 whitespace-no-wrap border-b text-blue-900 border-gray-500 text-sm leading-5">
                                            <span class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                                <span aria-hidden class="absolute inset-0 bg-green-200 opacity-50 rounded-full"></span>
                                                <span class="relative text-xs">POST</span>
                                            </span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                                            <div class="text-sm leading-5 text-blue-900"><pre>api/task/{id}</pre></div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500 text-sm leading-5">
                                            <table>
                                                <tr>
                                                    <td class="font-bold text-red-500">_method</td>
                                                    <td width="50"></td>
                                                    <td class="px-3 py-1">PUT</td>
                                                </tr>
                                                <tr>
                                                    <td class="font-bold text-red-500">user_id</td>
                                                    <td width="50"></td>
                                                    <td class="px-3 py-1">Number</td>
                                                </tr>
                                                <tr>
                                                    <td class="font-bold text-red-500">isActive</td>
                                                    <td width="50"></td>
                                                    <td class="px-3 py-1">Boolean (0 or 1)</td>
                                                </tr>
                                                <tr>
                                                    <td class="font-bold text-red-500">position</td>
                                                    <td width="50"></td>
                                                    <td class="px-3 py-1">String</td>
                                                </tr>
                                            </table>
                                        </td>
                                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500 text-sm leading-5">
                                            <table>
                                                <tr>
                                                    <td class="font-bold text-green-500">status_code</td>
                                                    <td width="50"></td>
                                                    <td class="px-3 py-1">200</td>
                                                </tr>
                                                <tr>
                                                    <td class="font-bold text-green-500">task</td>
                                                    <td width="50"></td>
                                                    <td class="px-3 py-1">Task JSON With <pre>id : {id}</pre></td>
                                                </tr>
                                            </table>
                                        </td>
                                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500 text-sm leading-5">Update Task</td>
                                    </tr>
                                    <tr>
                                        <td class="px-6 py-4 whitespace-no-wrap border-b text-blue-900 border-gray-500 text-sm leading-5">
                                            <span class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                                <span aria-hidden class="absolute inset-0 bg-green-200 opacity-50 rounded-full"></span>
                                                <span class="relative text-xs">POST</span>
                                            </span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                                            <div class="text-sm leading-5 text-blue-900"><pre>api/task/{id}</pre></div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500 text-sm leading-5">
                                            <table>
                                                <tr>
                                                    <td class="font-bold text-red-500">_method</td>
                                                    <td width="50"></td>
                                                    <td class="px-3 py-1">DELETE</td>
                                                </tr>
                                            </table>
                                        </td>
                                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500 text-sm leading-5">
                                            <table>
                                                <tr>
                                                    <td class="font-bold text-green-500">status_code</td>
                                                    <td width="50"></td>
                                                    <td class="px-3 py-1">200</td>
                                                </tr>
                                            </table>
                                        </td>
                                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500 text-sm leading-5">Delete Task</td>
                                    </tr>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>