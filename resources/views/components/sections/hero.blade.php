<section class="relative overflow-hidden">
    <div class="absolute inset-x-0 bottom-0 h-[245px]
                bg-[url('../images/hero/background/city.png')]
                bg-[length:1600px_auto] bg-[position:center_bottom] bg-repeat-x"></div>
    <x-container class="relative z-10 flex items-center">
        <div class="absolute inset-0">
            <img src="{{ Vite::asset('resources/images/hero/background/figures1.svg') }}"
                 class="absolute -right-[104px] -bottom-[2px] w-[1600px] h-[865px] max-w-none">
            <img src="{{ Vite::asset('resources/images/hero/background/figures2.png') }}"
                 class="absolute -left-[206px] bottom-[160px]  w-[788px] h-[630px] max-w-none">
        </div>
        <div class="ml-[70px] mr-[72px]">
            <x-award/>
            <h1 class="text-6xl leading-[125%] text-[#242f51] font-semibold w-[550px] mt-[24px]">Best
                app for
                your
                modern lifestyle</h1>
            <div class="text-lg leading-[155%] text-[#616368] w-[500px] mt-[12px]">
                Increase productivity with a simple to-do app. app for
                managing your personal budgets.
            </div>
            <div class="flex items-center gap-[27px] mt-[40px]">
                <x-button>Try for free</x-button>
                <x-link href="#" class="text-[#2500f9]">Watch demo video</x-link>
            </div>
        </div>
        <div class="w-[446px] mt-[19px] mb-[16px] self-start">
            <img class="w-full h-[816px]"
                 src="{{ Vite::asset('resources/images/hero/phone.svg') }}"
                 alt="AppLab in phone">
        </div>
    </x-container>
</section>


