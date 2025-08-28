<x-layout heading="Edit Job : {{$job->title}}">
    <h2 class=" text-gray-900"></h2>

    <form method="POST" action="/jobs/{{$job->id}}">
        @csrf
        @method('patch')
        <div class="space-y-12">
          <div class="border-b border-gray-200 pb-12">
            <p class="mt-1 text-sm/6 text-gray-600">We need some information about this job</p>

            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
              <div class="sm:col-span-4">
                <x-form-lable for="title">Title</x-form-lable>
                <div class="mt-2">
                  <div class="flex items-center rounded-md bg-white pl-3 border border-gray-300 focus-within:ring-2 focus-within:ring-indigo-600">

                    <x-form-input
                    id="title"
                    type="text"
                    name="title"
                    value="{{$job->title}}"
                    placeholder="Site Supervisor" />
                </div>
                    <div class="text-red-500 text-sm pt-2">
                       <x-form-errors name="title"/>
                    </div>
                </div>
              </div>
              <div class="sm:col-span-4">
                <x-form-lable for="salary">Salary</x-form-lable>
                <div class="mt-2">
                  <div class="flex items-center rounded-md bg-white pl-3 border border-gray-300 focus-within:ring-2 focus-within:ring-indigo-600">
                    <x-form-input
                    id="salary"
                    type="text"
                    name="salary"
                    value="{{$job->salary}}"
                    placeholder="$50,000" />
                  </div>
                  <div class="text-red-500 text-sm pt-2">
                   <x-form-errors name="salary"/>
                </div>
                </div>
              </div>

            </div>
          </div>

        </div>

        <div class="mt-6 flex items-center justify-between gap-x-6">
            <div class="flex items-center">
                <button form="delete-form" type="submit" class="rounded-md bg-red-500 px-3 py-2 text-sm font-semibold text-white focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Delete</button>
            </div>
            <div class="flex items-center">
                <a href="/jobs/{{$job->id}}" type="button" class="text-sm/6 font-semibold px-3 py-2 text-gray-700">Cancel</a>
                <button type="submit" class="rounded-md bg-indigo-500 px-3 py-2 text-sm font-semibold text-white focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Update</button>

            </div>

        </div>
      </form>
      <form action="/jobs/{{$job->id}}" id="delete-form" method="POST">
        @csrf
        @method('DELETE')
      </form>

</x-layout>

