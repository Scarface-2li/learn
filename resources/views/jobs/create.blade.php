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
                <label for="Title" class="block text-sm/6 font-medium text-gray-900">Title</label>
                <div class="mt-2">
                  <div class="flex items-center rounded-md bg-white pl-3 border border-gray-300 focus-within:ring-2 focus-within:ring-indigo-600">

                    <input id="title" type="text" name="title" placeholder="Site Supervisor" class="block min-w-0 grow bg-white py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-500 focus:outline-none sm:text-sm/6" />
                </div>
                    <div class="text-red-500 text-sm pt-2">
                        @error('title')
                            {{$message}}
                        @enderror
                    </div>
                </div>
              </div>
              <div class="sm:col-span-4">
                <label for="Salary" class="block text-sm/6 font-medium text-gray-900">Salary</label>
                <div class="mt-2">
                  <div class="flex items-center rounded-md bg-white pl-3 border border-gray-300 focus-within:ring-2 focus-within:ring-indigo-600">
                    <input id="salary" type="text" name="salary" placeholder="$50,000" class="block min-w-0 grow bg-white py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-500 focus:outline-none sm:text-sm/6" />
                  </div>
                  <div class="text-red-500 text-sm pt-2">
                    @error('salary')
                        {{$message}}
                    @enderror
                </div>
                </div>
              </div>

            </div>
          </div>




        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
          <button type="button" class="text-sm/6 font-semibold text-gray-700">Cancel</button>
          <button type="submit" class="rounded-md bg-indigo-500 px-3 py-2 text-sm font-semibold text-white focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Save</button>
        </div>
      </form>

</x-layout>

