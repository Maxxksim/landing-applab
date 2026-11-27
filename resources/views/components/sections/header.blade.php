<header x-data="{ isOpened: false }" class="absolute top-0 left-0 z-50 w-full">
    <x-container class="items-center h-[244px] justify-between lg:justify-center flex">
        <x-logo/>
        <div>
            <button
                    type="button"
                    @click="isOpened = !isOpened"
                    class="flex flex-col gap-3 min-h-[45px] justify-center lg:hidden"
                    :class="isOpened && 'relative'"
                    :aria-expanded="isOpened"
                    :aria-label="isOpened ? 'Close menu' : 'Open menu'">
                <x-line ::class="isOpened && 'rotate-45 absolute '"/>
                <x-line ::class="isOpened && 'opacity-0'"/>
                <x-line ::class="isOpened && '-rotate-45 absolute'"/>
            </button>
        </div>
        <x-nav
                class="lg:ml-auto lg:border-0"
                ::class="isOpened
            ? 'flex flex-col absolute top-[150px] inset-x-4 rounded-md border border-[#242f51] bg-[#fcae61] p-6 lg:static lg:flex-row lg:w-auto lg:bg-transparent lg:p-0'
            : 'hidden'"/>
        <x-button class="hidden ml-[26px] lg:ml-[53px] lg:block">
            Try for free
        </x-button>

    </x-container>
</header>



