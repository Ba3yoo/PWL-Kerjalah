<script setup>
import {Link} from '@inertiajs/vue3'
</script>

<template>
    <main>
        <article>
            <slot>Welcome to PWL Page!!!</slot>
        </article>
        <footer class="flex justify-center pt-6 mt-6 border-t-2 border-teal-500">
            <div >
                <Link href="/">Dashboard</Link>
                <a class="text-teal-500 font-extrabold p-3">|</a>
                <Link href="/poke">Poke</Link>
                <a class="text-teal-500 font-extrabold p-3">|</a>
                <Link href="/user/Nur%20Hazbiy%20Shaffan">Test User</Link>
            </div>
        </footer>
    </main>
</template>
