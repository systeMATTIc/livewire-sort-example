<div class="bg-gray-100 h-full p-16">
    <div class="container mx-auto">
        <div class="overflow-x-auto mt-10 relative p-7 sm:p-9 bg-white rounded shadow-xl">
            <div class="inline-block min-w-full overflow-hidden">
                <table class="min-w-full text-left text-gray-500 whitespace-no-wrap">
                    <thead>
                        <tr>
                            <th class="pr-4">
                                @livewire('sort', ['field' => 'first_name', 'label' => 'First Name'])
                            </th>

                            <th class="px-4 py-2">
                                @livewire('sort', ['field' => 'last_name', 'label' => 'Last Name'])
                            </th>

                            <th class="px-4 py-2">
                                @livewire('sort', ['field' => 'email', 'label' => 'Email'])
                            </th>

                            <th class="px-4 py-2">
                                @livewire('sort', ['field' => 'created_at', 'label' => 'Date Created'])
                            </th>

                            <th class="px-4 py-2">
                                @livewire('sort', ['field' => 'updated_at', 'label' => 'Date Modified'])
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                        <tr class="border-b border-gray-200">
                            <td class="pr-4">{{ $user->first_name }}</td>
                            <td class="px-4 py-4">{{ $user->last_name }}</td>
                            <td class="px-4 py-4">{{ $user->email }}</td>
                            <td class="px-4 py-4">{{ $user->created_at->toDayDateTimeString() }}</td>
                            <td class="px-4 py-4">{{ $user->updated_at->toDayDateTimeString() }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>