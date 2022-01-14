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
{{--    End filters --}}



    <div class="ideas-container space-y-6 my-6">
           <div class="idea-container flex bg-white rounded-xl hover:shadow-md transition duration-150 ease-in ">

               <div class="idea-left-title flex flex-col items-center justify-around space-y-6 m-4 py-3  ml-5  ">
                   <div class="flex flex-col    items-center ">
                       <p class="text-xl font-bold">12</p>
                       <p class="font-thin text-gray-500">Votes</p>
                   </div>
                   <button class="button   space-x-4 bg-gray-100 rounded-xl p-2  border-gray-200  hover:border-gray-400 hover:bg-blue-hover hover:text-white transition duration-150 ease-in">VOTE</button>
               </div>

               <div class="vertical-border  border border-gray-100 ml-1"></div>


               <div class="idea-right-content flex mx-4 my-4 space-x-2">
                   <img class="w-6 h-6 rounded-xl" src="https://i.pravatar.cc/300" alt="avater">
                   <div class="flex flex-col space-y-2 justify-around">
                       <h5 class="font-bold">Lorem ipsum dolor sit amet, consectetur eritatis, voluptate! </h5>
                       <p class="text-gray-400 line-clamp-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae culpa distinctio, dolore est eum explicabo hic labore laborum natus officia placeat praesentium provident quas quod rerum sed unde veniam voluptas. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea in inventore iste laboriosam tenetur? At consequuntur culpa cum debitis, distinctio est, ipsa iure nostrum perferendis perspiciatis rerum sed veritatis vitae.</p>

                       <div class="flex items-center justify-between mt-6">
                           <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                               <div>10 hours ago</div>
                               <div>&bull; </div>
                               <div>Category</div>
                               <div>&bull; </div>
                               <div class="font-bold text-gray-900">3 Comments</div>
                           </div>

                           <div class="flex space-x-2">
                               <button class="button bg-gray-100 rounded-full text-xs px-6 ml-2 font-bold  border-gray-200  hover:border-gray-400 hover:bg-blue-hover hover:text-white  transition duration-150 ease-in">OPEN</button>
                               <button class="relative button bg-gray-100 text-gray-400 rounded-full text-xs px-2 font-bold  border-gray-200  hover:border-gray-400 hover:bg-blue-hover hover:text-white  transition duration-150 ease-in">
                                   <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z"></path></svg>
                                    <ul class="absolute w-44 ml-8 text-left font-semibold bg-white shadow-lg rounded-xl py-3">
                                        <li><a href="#" class="hover:bg-gray-100 block text-black hover:bg-blue-hover hover:text-white transition  duration-150 ease-in px-5 py-3">Mark as spam</a></li>
                                        <li><a href="#" class="hover:bg-gray-100 block text-black hover:bg-blue-hover hover:text-white transition  duration-150 ease-in px-5 py-3">Delete Post</a></li>
                                    </ul>

                               </button>

                           </div>
{{--                           <p class="mr-4">10 hours ago</p>--}}
{{--                           <div class="flex justify-center items-center border "> <li class="list-disc  text-gray-200"></li>Category</div>--}}
                       </div>

                   </div>


               </div>

           </div>
{{--        End idea-container--}}


    </div>
{{--    End Ideas-container --}}
</x-app-layout>
