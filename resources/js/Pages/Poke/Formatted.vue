<script setup>
import {ref, onMounted, watch} from "vue"
import Layout from '@/Shared/Layout.vue'
import axios from "axios"
import {Link} from "@inertiajs/vue3";

const pokes = ref([])
const fetchingPoke = ref(false)

async function loadMorePoke() {
    fetchingPoke.value = true
    const pokesResponse = await axios.get(
        "https://pokeapi.co/api/v2/pokemon?limit=100&offset=5"
    )

    const results = pokesResponse.data.results || []
    results.map(obj => ({...obj, hide: true, loaded: false, loading:false , details: null}))
    // poke =
    pokes.value.push(...(results))

    fetchingPoke.value = false
}

async function fetchPokeDetails(url) {
    const pokesResponse = await axios.get(url)

    return pokesResponse.data
}

async function fetchInitialPoke() {
    const pokeFactsResponse = await axios.get(
        "https://pokeapi.co/api/v2/pokemon?limit=5&offset=0"
    )

    const results = pokeFactsResponse.data.results

    pokes.value = results.map(obj => ({...obj, hide: true, loaded: false, loading:false , details: null}))
}

async function toggleHide(index) {
    if (pokes.value[index].hide) {
        if (!pokes.value[index].loaded) {
            pokes.value[index].loading = true
            pokes.value[index].details = await fetchPokeDetails(pokes.value[index].url) // There are multiple ways to save data like these, but this is the simplest yet messy way :p
            console.log(pokes.value[index].details)
            pokes.value[index].loading = false
            pokes.value[index].loaded = true
        }
        if(pokes.value[index].details.length !== null){
            pokes.value[index].hide = false
        }
    } else {
        pokes.value[index].hide = true
    }
}

function hideAll() {
    pokes.value = pokes.value.map(obj => ({...obj, hide: true}))
}

onMounted(async () => {
    await fetchInitialPoke()
})

watch(pokes, () => {
// yes, console.log() is a side effect
    const str = JSON.stringify(pokes.value)
    console.log(`new poke list is: ${str}`)
})

</script>

<template>
    <Layout>
        <div class="row m-4">
            <div class="flex justify-between mb-4">
                <h3>Poke Facts</h3>
                <button @click="hideAll"
                        class="flex-shrink bg-teal-500 hover:bg-teal-700 border-teal-500 hover:border-teal-700 text-sm border-2 text-white py-2 px-3 rounded">
                    Hide All
                </button>
            </div>
            <div id="accordion-nested-parent" data-accordion="collapse">
                <div v-for="(poke, index) in pokes" :key="index">
                    <h2 :id="'accordion-collapse-heading-' + index">
                        <button type="button" :class="{'rounded-t-xl': index === 0, 'border-b-0': index !== pokes.length - 1}"
                                class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3"
                                @click="toggleHide(index)">
                            <span class="capitalize">{{ poke.name }}</span>
                            <svg v-if="!poke.loading" data-accordion-icon class="w-3 h-3 shrink-0" aria-hidden="true" :class="{'rotate-180': poke.hide}"
                                 xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                      stroke-width="2" d="M9 5 5 1 1 5"/>
                            </svg>
                            <svg v-else aria-hidden="true" class="w-5 h-5 text-gray-200 animate-spin dark:text-gray-600 fill-blue-600" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/>
                                <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"/>
                            </svg>
                        </button>
                    </h2>
                    <div :id="'accordion-collapse-body-' + index" :class="{'hidden': poke.hide}">
                        <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                            <div class="flex">
                                <img v-if="poke.loaded && poke.details.sprites !== null" :src="poke.details.sprites.front_default"  :alt="poke.name+'_image'"/>
                                <img v-if="poke.loaded && poke.details.sprites !== null && poke.details.sprites.back_default !== null" :src="poke.details.sprites.back_default"  :alt="poke.name+'_image'"/>
                            </div>
                            <p class="mb-2 text-gray-500 dark:text-gray-400 font-bold">Abilities</p>
                            <!-- Nested accordion -->
                            <div id="accordion-nested-collapse">
                                <h2 v-if="poke.loaded && poke.details.abilities.length !== 0"
                                    v-for="(ability,abilityIindex) in poke.details.abilities">
                                    <button type="button"
                                            :class="{'rounded-t-xl': abilityIindex === 0, 'border-b-0': abilityIindex !== poke.details.abilities.length - 1}"
                                            class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3">
                                        <span class="capitalize">{{ ability.ability.name }}</span>
                                    </button>
                                </h2>
                            </div>
                            <!-- End: Nested accordion -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </Layout>
</template>

<style scoped>

</style>
