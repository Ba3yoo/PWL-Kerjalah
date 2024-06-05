<script setup>
import {ref, onMounted} from "vue"
import Layout from '@/Shared/Layout.vue'
import axios from "axios"
import {Link} from '@inertiajs/vue3'

const pokes = ref([])
const fetchingPoke = ref(false)

async function loadMorePoke() {
    fetchingPoke.value = true
    const pokeFactsResponse = await axios.get(
        "https://pokeapi.co/api/v2/pokemon?limit=100&offset=5"
    )
    pokes.value.push(...(pokeFactsResponse.data.results || []))

    fetchingPoke.value = false
}

async function fetchInitialPokeFacts() {
    const pokeFactsResponse = await axios.get(
        "https://pokeapi.co/api/v2/pokemon?limit=5&offset=0"
    )
    pokes.value = pokeFactsResponse.data.results
}

onMounted(async () => {
    await fetchInitialPokeFacts()
})

function removeTodo(todo) {
    pokes.value = pokes.value.filter((t) => t !== todo)
}

</script>

<template>
    <Layout>
        <div class="m-4">
            <div class="flex justify-between mb-4">
                <h3>Poke Facts</h3>
                <Link href="/poke/formatted" class="flex-shrink bg-teal-500 hover:bg-teal-700 border-teal-500 hover:border-teal-700 text-sm border-2 text-white py-2 px-3 rounded">
                    Formatted
                </Link>
            </div>
            <div class="col-md-12 border-2 rounded-lg p-4">
                <div>
                    <ul>
                        <li v-for="(poke, index) in pokes" :key="index" class="list-group-item">
                            <input v-model="poke.done" type="checkbox">
                            <span :class="{ 'line-through': poke.done }"
                                  class="ml-2">{{ poke.name }}</span>
                            <button class="text-red-500 ml-2" @click="removeTodo(poke)">&#x2717;</button>
                            <a class="text-green-500 ml-2" :href="poke.url">&rarr;</a>
                        </li>
                    </ul>
                </div>
                <div class="mt-3">
                    <div class="text-center flex">
                        <button @click="loadMorePoke" class="flex-auto bg-teal-500 hover:bg-teal-700 border-teal-500 hover:border-teal-700 text-sm border-2 text-white py-2 px-3 rounded">{{
                                fetchingPoke ? '...' : 'Load more'
                            }}
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </Layout>
</template>

<style scoped>

</style>
