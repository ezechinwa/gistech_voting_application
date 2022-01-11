<x-app-layout>
    <div class="filters flex space-x-6 ">

        <div class="w-1/3">
            <select name="category" id="category" class="w-full rounded-xl border-none  px-4 py-2 text-xs ">
                <option value="Category One">Category One </option>
                <option value="Category Two">Category Two </option>
                <option value="Category Three">Category Three </option>
            </select>
        </div>

        <div class="w-1/3">
            <select name="other_filters" id="other_filters" class="w-full rounded-xl border-none  px-4 py-2  text-xs">
                <option value="Filter One">Category One </option>
                <option value="Filter Two">Category Two </option>
                <option value="Filter Three">Category Three </option>
                <option value="Filter Three">Category Four </option>
            </select>
        </div>


        <div class="w-2/3 relative">
            <svg class="w-4 h-full text-gray-700 absolute top-0 flex  items-center ml-2" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
            <input type="search" placeholder="Find an idea" class="w-full rounded-xl bg-white border-none px-4 py-2 pl-8 placeholder-gray-900 text-xs">
        </div>




    </div>
{{--    End filters here--}}
</x-app-layout>
