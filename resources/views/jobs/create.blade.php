<x-layout heading="Job">
    <h2 class=" text-gray-900"></h2>

    <form action="/jobs" method="POST">
        @csrf
        <div class="space-y-12">
            <div class="border-b border-gray-200 pb-12">
                <h2 class="font-bold text-lg text-gray-900">Job Create</h2>
                <p class="mt-1 text-sm/6 text-gray-600">We need some information about this job</p>
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">

                        <x-form-lable for="title">Title</x-form-lable>
                        <div class="mt-2">
                            <div
                                class="flex items-center rounded-md bg-white pl-3 border border-gray-300 focus-within:ring-2 focus-within:ring-indigo-600">

                                <x-form-input id="title" type="text" name="title"
                                    placeholder="Site Supervisor" />
                            </div>
                            <div class="text-red-500 text-sm pt-2">
                                <x-form-errors name="title" />
                            </div>
                        </div>
                    </div>
                    <div class="sm:col-span-4">
                        <x-form-lable for="salary">Salary</x-form-lable>
                        <div class="mt-2">
                            <div
                                class="flex items-center rounded-md bg-white pl-3 border border-gray-300 focus-within:ring-2 focus-within:ring-indigo-600">
                                <x-form-input id="salary" type="text" name="salary" placeholder="$50,000" />
                            </div>
                            <div class="text-red-500 text-sm pt-2">
                                <x-form-errors name="salary" />
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <a type="button" href="/jobs" class="text-sm/6 font-semibold text-gray-700">Cancel</a>
            <button type="submit"
                class="rounded-md bg-indigo-500 px-3 py-2 text-sm font-semibold text-white focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Save</button>
        </div>
    </form>

</x-layout>
