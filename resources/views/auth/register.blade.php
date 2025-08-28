<x-layout heading="User Registration">
    <h2 class=" text-gray-900"></h2>

    <form action="/register" method="POST">
        @csrf
        <div class="space-y-12">
            <div class="border-b border-gray-200 pb-12">
                <h2 class="font-bold text-lg text-gray-900">Register New User</h2>
                <div class="mt-4 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">

                        <x-form-lable for="name">Name</x-form-lable>
                        <div class="mt-0">
                            <div
                                class="flex items-center rounded-md bg-white pl-3 border border-gray-300 focus-within:ring-2 focus-within:ring-indigo-600">

                                <x-form-input id="name" type="text" name="name" :value="old('name')" required/>
                            </div>
                            <div class="text-red-500 text-sm pt-1">
                                <x-form-errors name="name" />
                            </div>
                        </div>
                    </div>
                    <div class="sm:col-span-4">
                        <x-form-lable for="email">Email</x-form-lable>
                        <div class="mt-0">
                            <div
                                class="flex items-center rounded-md bg-white pl-3 border border-gray-300 focus-within:ring-2 focus-within:ring-indigo-600">
                                <x-form-input id="email" type="text" name="email" type="email" :value="old('email')" required />
                            </div>
                            <div class="text-red-500 text-sm pt-1">
                                <x-form-errors name="email" />
                            </div>
                        </div>
                    </div>
                    <div class="sm:col-span-4">
                        <x-form-lable for="password">Password</x-form-lable>
                        <div class="mt-0">
                            <div
                                class="flex items-center rounded-md bg-white pl-3 border border-gray-300 focus-within:ring-2 focus-within:ring-indigo-600">
                                <x-form-input id="password" type="text" name="password" type="password" required />
                            </div>
                            <div class="text-red-500 text-sm pt-1">
                                <x-form-errors name="password" />
                            </div>
                        </div>
                    </div>
                    <div class="sm:col-span-4">
                        <x-form-lable for="password_confirmation">Confirm Password</x-form-lable>
                        <div class="mt-0">
                            <div
                                class="flex items-center rounded-md bg-white pl-3 border border-gray-300 focus-within:ring-2 focus-within:ring-indigo-600">
                                <x-form-input id="password_confirmation" type="text" name="password_confirmation" type="password" required />
                            </div>
                            <div class="text-red-500 text-sm pt-1">
                                <x-form-errors name="password_confirmation" />
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <a type="button" href="/jobs" class="text-sm/6 font-semibold text-gray-700">Cancel</a>
            <button type="submit"
                class="rounded-md bg-indigo-500 px-3 py-2 text-sm font-semibold text-white focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Register</button>
        </div>
    </form>

</x-layout>
