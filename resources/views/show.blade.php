<x-app-layout>
   <div >

       <a href="/" class="flex items-center font-semibold hover:underline">
           <svg class="w-4 h-4  ml-2"

                fill="currentColor"
                viewBox="0 0 20 20" >
               <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd">
               </path>
           </svg>
           <p2  class="text-xs">All  Ideas (or back to chosen category with filters)</p2>
       </a>
   </div>


    {{--       Beginning of Idea container --}}
    <div class="idea-container mt-3 flex bg-white rounded-xl ">
        <div class="idea-right-content flex mx-4 my-4  px-4 space-x-2 w-full ">
            <img class="w-20 h-20 rounded-xl" src="https://i.pravatar.cc/300?img=3" alt="avater">
            <div class="flex flex-col space-y-2 justify-around flex-1">
                <h5 class="font-bold">A random title can go here </h5>
                <div class="leading-normal space-y-4 text-gray-400 ">
                   Lorem iphsum dolor sit amet, consectetur adipisicing elit. Adipisci asperiores, blanditiis facilis iure libero ullam. Ab ad consequatur debitis dolor eligendi, eos error explicabo harum omnis, quo rerum sit voluptatem.
                    Lorem iphsum dolor sit amet, consectetur adipisicing elit. Adipisci asperiores, blanditiis facilis iure libero ullam. Ab ad consequatur debitis dolor eligendi, eos error explicabo harum omnis, quo rerum sit voluptatem.

                </div>
                <div class="flex items-center justify-between mt-8">
                    <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                        <div class="font-bold text-black">John Doe</div>
                        <div>&bull; </div>
                        <div>10 hours ago</div>
                        <div>&bull; </div>
                        <div>Category</div>
                        <div>&bull; </div>
                        <div class="font-bold text-gray-900">3 Comments</div>
                    </div>


                    <div class="flex space-x-2">
                        <button class="button bg-gray-100 rounded-full text-xs px-6 ml-2 font-bold  border-gray-200  hover:border-gray-400 hover:bg-blue-hover hover:text-white  transition duration-150 ease-in">OPEN</button>
                        <button class="relative button bg-gray-100 text-gray-400 rounded-full text-xs px-2 font-bold border-2 border-gray-200  hover:border-gray-400 hover:bg-blue-hover hover:text-white  transition duration-150 ease-in">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z"></path></svg>
                            <ul class="hidden absolute w-44 ml-8 text-left font-semibold bg-white shadow-lg rounded-xl py-3">
                                <li><a href="#" class="hover:bg-blue-hover block text-black hover:text-white transition  duration-150 ease-in px-5 py-3">Mark as spam</a></li>
                                <li><a href="#" class="hover:bg-blue-hover block text-black  hover:text-white transition  duration-150 ease-in px-5 py-3">Delete Post</a></li>
                            </ul>

                        </button>

                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--       End of Idea container--}}


{{--    Beginning of Reply container --}}
    <div class="flex flex-row justify-between items-center w-full mt-4  mb-4">


        <div class="flex flex-row space-x-3 ml-4">
            <button class="flex items center justify-center   h-11 text-xs text-white bg-blue-500 hover:bg-blue-hover hover:text-white font-semibold rounded-xl border border-gray-200    transition
 duration-150 ease-in px-8 py-3 ">
                <span class="">Reply</span>
            </button>

            <button class="flex items-center justify-between w-full h-11 text-xs bg-gray-200 hover:bg-gray-400 hover:text-white font-semibold rounded-xl border border-gray-200    transition
 duration-150 ease-in px-4 py-3">
                <span class="">Set Status</span>
                <svg class="w-4 h-4 ml-2"
                     fill="currentColor"
                     viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd">
                    </path>
                </svg>
            </button>

        </div>


        <div class="flex  items-center  space-x-3  mr-4">
            <div class="bg-white font-semibold text-center rounded-xl px-3 py-2 h-11">
                <div class="text-xl leading-snug">12</div>
                <div class="text-gray-400 text-xs leading-none"> Votes</div>
            </div>

            <button
                type="button"
                class="w-32 h-11 text-xs bg-gray-200 font-semibold rounded-xl border border-gray-200
                hover:bg-gray-400 hover:text-white  transition duration-150 ease-in px-6 py-3">
                <span class="">VOTE</span>
            </button>

        </div>
    </div>

{{--    End of Reply container--}}



{{--   Start Comments container--}}
    <div class="comments-container  relative space-y-6 ml-22 pt-6 my-8 mt-1 ">

        <div class="comment-container  relative mt-3 flex bg-white rounded-xl ">
            <div class="idea-right-content flex mx-4 my-4  px-4 space-x-2 w-full ">
                <img class="w-20 h-20 rounded-xl" src="https://i.pravatar.cc/300?img=1" alt="avater">
                <div class="flex flex-col space-y-2 justify-around flex-1">
                    <div class="leading-normal space-y-4 text-gray-400 ">
                        Lorem iphsum dolor sit amet, consectetur adipisicing elit. Adipisci asperiores, blanditiis facilis iure libero ullam. Ab ad consequatur debitis dolor eligendi, eos error explicabo harum omnis, quo rerum sit voluptatem.
                        Lorem iphsum dolor sit amet, consectetur adipisicing elit. Adipisci asperiores, blanditiis facilis iure libero ullam. Ab ad consequatur debitis dolor eligendi, eos error explicabo harum omnis, quo rerum sit voluptatem.
                    </div>

                    <div class="flex items-center justify-between mt-8">
                        <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                            <div class="font-bold text-black">John Doe</div>
                            <div>10 hours ago</div>
                        </div>


                        <div class="flex space-x-2">
                            <button class="relative button bg-gray-100 text-gray-400 rounded-full text-xs px-2 font-bold border-2 border-gray-200  hover:border-gray-400 hover:bg-blue-hover hover:text-white  transition duration-150 ease-in">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z"></path></svg>
                                <ul class="hidden absolute w-44 ml-8 text-left font-semibold bg-white shadow-lg rounded-xl py-3">
                                    <li><a href="#" class="hover:bg-blue-hover block text-black hover:text-white transition  duration-150 ease-in px-5 py-3">Mark as spam</a></li>
                                    <li><a href="#" class="hover:bg-blue-hover block text-black  hover:text-white transition  duration-150 ease-in px-5 py-3">Delete Post</a></li>
                                </ul>

                            </button>

                        </div>
                    </div>
                </div>
            </div>
        </div> {{--        End comment container--}}




        <div class="is-admin comment-container relative mt-3 flex bg-white rounded-xl ">
            <div class="idea-right-content flex mx-4 my-4  px-4 space-x-2 w-full ">

                <div class="flex flex-col items-center">
                    <img class="w-20 h-20 rounded-xl" src="https://i.pravatar.cc/300?img=2" alt="avater">
                    <div class="font-bold text-blue-500 text-xs">Admin</div>
                </div>

                <div class="flex flex-col space-y-2 justify-around flex-1">
                    <h5 class="font-bold">Status Changed to "Under Construction"  </h5>
                    <div class="leading-normal space-y-4 text-gray-400 ">
                        Lorem iphsum dolor sit amet, consectetur adipisicing elit. Adipisci asperiores, blanditiis facilis iure libero ullam. Ab ad consequatur debitis dolor eligendi, eos error explicabo harum omnis, quo rerum sit voluptatem.
                        Lorem iphsum dolor sit amet, consectetur adipisicing elit. Adipisci asperiores, blanditiis facilis iure libero ullam. Ab ad consequatur debitis dolor eligendi, eos error explicabo harum omnis, quo rerum sit voluptatem.
                    </div>

                    <div class="flex items-center justify-between mt-8">
                        <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                            <div class="font-bold text-blue-500">Andrea</div>
                            <div>10 hours ago</div>
                        </div>


                        <div class="flex space-x-2">
                            <button class="relative button bg-gray-100 text-gray-400 rounded-full text-xs px-2 font-bold border-2 border-gray-200  hover:border-gray-400 hover:bg-blue-hover hover:text-white  transition duration-150 ease-in">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z"></path></svg>
                                <ul class="hidden absolute w-44 ml-8 text-left font-semibold bg-white shadow-lg rounded-xl py-3">
                                    <li><a href="#" class="hover:bg-blue-hover block text-black hover:text-white transition  duration-150 ease-in px-5 py-3">Mark as spam</a></li>
                                    <li><a href="#" class="hover:bg-blue-hover block text-black  hover:text-white transition  duration-150 ease-in px-5 py-3">Delete Post</a></li>
                                </ul>

                            </button>

                        </div>
                    </div>
                </div>
            </div>
        </div> {{--        End Admin comment container--}}



        <div class="comment-container  relative mt-3 flex bg-white rounded-xl ">
            <div class="idea-right-content flex mx-4 my-4  px-4 space-x-2 w-full ">
                <img class="w-20 h-20 rounded-xl" src="https://i.pravatar.cc/300?img=10" alt="avater">
                <div class="flex flex-col space-y-2 justify-around flex-1">
                    <div class="leading-normal space-y-4 text-gray-400 ">
                        Lorem iphsum dolor sit amet, consectetur adipisicing elit. Adipisci asperiores, blanditiis facilis iure libero ullam. Ab ad consequatur debitis dolor eligendi, eos error explicabo harum omnis, quo rerum sit voluptatem.
                        Lorem iphsum dolor sit amet, consectetur adipisicing elit. Adipisci asperiores, blanditiis facilis iure libero ullam. Ab ad consequatur debitis dolor eligendi, eos error explicabo harum omnis, quo rerum sit voluptatem.
                    </div>

                    <div class="flex items-center justify-between mt-8">
                        <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                            <div class="font-bold text-black">Peter Doe</div>
                            <div>10 hours ago</div>
                        </div>


                        <div class="flex space-x-2">
                            <button class="relative button bg-gray-100 text-gray-400 rounded-full text-xs px-2 font-bold border-2 border-gray-200  hover:border-gray-400 hover:bg-blue-hover hover:text-white  transition duration-150 ease-in">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z"></path></svg>
                                <ul class="hidden absolute w-44 ml-8 text-left font-semibold bg-white shadow-lg rounded-xl py-3">
                                    <li><a href="#" class="hover:bg-blue-hover block text-black hover:text-white transition  duration-150 ease-in px-5 py-3">Mark as spam</a></li>
                                    <li><a href="#" class="hover:bg-blue-hover block text-black  hover:text-white transition  duration-150 ease-in px-5 py-3">Delete Post</a></li>
                                </ul>

                            </button>

                        </div>
                    </div>
                </div>
            </div>
        </div> {{--        End comment container--}}

    </div> {{--   End Comments container--}}

</x-app-layout>
