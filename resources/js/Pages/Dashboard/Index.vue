<script setup>
import Layout from '@/Shared/Layout.vue'
import {computed, reactive, ref, onMounted} from 'vue'

const count = ref(0)
const counter = reactive(count)
const isShow = ref(false)
const newTodo = ref('')

// give each todo a unique id
let id = 0
const hideCompleted = ref(false)
const todos = ref([
    {id: id++, text: 'Learn HTML', done: false},
    {id: id++, text: 'Learn JavaScript', done: true},
    {id: id++, text: 'Learn Vue', done: false}
])

const filteredTodos = computed(() => {
    return hideCompleted.value
        ? todos.value.filter((t) => !t.done)
        : todos.value
})

function addTodo() {
    todos.value.push({id: id++, text: newTodo.value, done: false})
    newTodo.value = ''
}

function removeTodo(todo) {
    todos.value = todos.value.filter((t) => t !== todo)
}

function toggle() {
    isShow.value = !isShow.value
}

function increment() {
    count.value++
}

// lifecycle hooks
onMounted(() => {
    console.log(`The initial count is ${count.value}.`)
})
</script>

<template>
    <Layout>
        <div class="p-4">
            <label class="inline-flex items-center mb-4 rounded-md cursor-pointer dark:text-gray-100" for="Toggle">
                <input id="Toggle" class="hidden peer" type="checkbox" @click="toggle">
                <span class="px-4 py-2 rounded-l-md dark:bg-teal-600 peer-checked:dark:bg-gray-700">List</span>
                <span class="px-4 py-2 rounded-r-md dark:bg-gray-700 peer-checked:dark:bg-teal-600">Counter</span>
            </label>
            <div class="p-4 border-2 rounded-lg">
                <div v-if="isShow">
                    <button
                        class="bg-transparent hover:bg-teal-500 text-teal-700 font-semibold hover:text-white py-2 px-4 border border-teal-500 hover:border-transparent rounded"
                        @click="increment">
                        Count is: {{ counter }}
                    </button>
                    <label class="block text-sm font-bold py-4">
                        Or you can modify here:
                    </label>
                    <input
                        v-model="count"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        inputmode="numeric" placeholder="0">
                </div>
                <div v-if="!isShow">
                    <div class="mb-3">
                        <form class="flex items-center border-b border-teal-500 pb-2 mb-1" @submit.prevent="addTodo">
                            <input v-model="newTodo"
                                   aria-label="Add ToDo"
                                   class="appearance-none bg-transparent border-none w-full mr-3 py-1 px-2 leading-tight focus:outline-none"
                                   placeholder="Add ToDo"
                                   required type="text">
                            <button
                                :class="{'bg-red-500' : hideCompleted, }"
                                class="flex-shrink-0  hover:bg-red-700 border-red-500 hover:border-red-700 text-sm border-2 text-white py-2 px-3 rounded"
                                @click="hideCompleted = !hideCompleted" type="button">
                                {{ hideCompleted ? 'Show all' : 'Hide completed' }}
                            </button>
                            <button
                                class="flex-shrink-0 bg-teal-500 hover:bg-teal-700 border-teal-500 hover:border-teal-700 text-sm border-2 text-white py-2 px-3 rounded ml-2"
                                type="submit"> Add
                            </button>
                        </form>
                    </div>
                    <ul>
                        <li v-for="todo in filteredTodos" :key="todo.id">
                            <input v-model="todo.done" type="checkbox">
                            <span :class="{ 'line-through': todo.done }" class="ml-2">{{ todo.text }}</span>
                            <button class="text-red-500 ml-2" @click="removeTodo(todo)">&#x2717;</button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </Layout>
</template>
