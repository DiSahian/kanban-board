<div>
        <x-sidebar.brand />
        <x-sidebar.group label="Tags">
            <x-sidebar.item href="#" badge="10" active="true">Tag 1</x-sidebar.item>
            <x-sidebar.item href="#" :active="false">Tag 2</x-sidebar.item>
            <x-sidebar.item href="#" :active="false">Tag 3</x-sidebar.item>
            <x-sidebar.item href="#" :active="false">Tag 4</x-sidebar.item>
        </x-sidebar.group>
    </x-sidebar>
</div>
