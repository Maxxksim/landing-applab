<section>
    <x-hero-background>
        <x-container class="flex ">
            <div class="pl-[70px] pr-[72px] pb-[220px] pt-[246px] ">
                <x-award/>
                <h1 class="text-6xl leading-[125%] text-[#242f51] font-semibold w-[550px] flex-nowrap mt-[30px]">Best
                    app for
                    your
                    modern lifestyle</h1>
                <div class="text-lg leading-[155%] text-[#616368] w-[500px] mt-[26px]">
                    Increase productivity with a simple to-do app. app for
                    managing your personal budgets.
                </div>
                <div class="flex  items-center gap-[27px]  mt-[40px]">
                    <x-button>Try for free</x-button>
                    <a href="#" class="text-[#2500f9]">Watch demo video</a>
                </div>
            </div>
            <div class="mt-[20px] w-[446px] h-[816px]">
                <img class="w-full h-full " src="{{ Vite::asset('resources/images/hero/phone.svg') }}"
                     alt="AppLab in phone">
            </div>
        </x-container>
    </x-hero-background>
</section>

