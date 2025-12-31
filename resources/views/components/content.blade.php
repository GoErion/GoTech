<div>
    <div class="flex justify-between w-full">
        <div class="mx-auto md:w-3/4">
            {{ $slot }}
        </div>
        <div class="hidden md:block md:w-1/4 space-y-4">
           <div class="border border-slate-900 p-4 rounded-2xl space-y-4">
               <div class="flex items-center justify-center bg-slate-900 py-3 rounded-3xl">
                   <div>
                       <h1 class="text-2xl">Profile</h1>
                   </div>
               </div>
               <div class="flex items-center justify-center">
                   <ul class="space-y-4">
                       <li>
                           User
                       </li>
                       <li>
                           Settings
                       </li>
                   </ul>
               </div>
           </div>
            <div class="border border-slate-900 p-4 rounded-2xl space-y-4">
                <div class="flex items-center justify-center">
                    <div>
                        <h1 class="">Threats</h1>
                    </div>
                </div>
                <div class="flex items-center justify-center">
                    <ul class="space-y-4">
                        <li>
                            Feeds
                        </li>
                        <li>
                            Followers
                        </li>
                    </ul>
                </div>
            </div>
            <div class="border border-slate-900 p-4 rounded-2xl space-y-4">
                <div class="flex items-center justify-center">
                    <ul class="space-y-4">
                        <li>
                            Community
                        </li>
                        <li>
                            Groups
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
