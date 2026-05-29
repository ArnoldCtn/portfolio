<x-app-layout style=" font-family:Georgia, 'Times New Roman', Times, serif">
<h3 class="text-amber-500 text-center text-6xl mt-10">Messages</h3>

    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
        <div class="mt-6 bg-white shadow-sm rounded-lg divide-y">
            <div class="relative overflow-x-auto">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 ">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-100 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">Name</th>
                            <th scope="col" class="px-6 py-3">Email</th>
                            <th scope="col" class="px-6 py-3">Message</th>
                        </tr>
                            
                    </thead>
                    @foreach($messages as $message)

                        <tbody clas>
                            <tr class="bg-white border-b dark:bg-gray-300 dark:border-gray-700">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                    {{$message->name}}
                                </th>
                                <td class="px-6 py-4">{{$message->email}}</td>
                                <td class="px-6 py-4">{{$message->messageContent}}</td>
                            </tr>
                        </tbody>
                        @empty($message)
                        <p class="text-gray-100"> No message Found </p>
                            
                        @endempty
                      
                        @endforeach
                            
                       
                </table>
            </div>
        </div>

    </div>

</x-app>