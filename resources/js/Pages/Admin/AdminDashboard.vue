<template>
    <div>
  <table class="border-2 bg-white table-fixed min-w-full">
        <thead>
        <tr class="border-b-2 shadow-md">
            <th class="px-1 py-1 w-1/5 bg-gray-200 sticky top-0" > İd</th>
            <th class="border-l-2 border-white px-1 py-1 w-1/5 bg-gray-200 sticky top-0" >Name</th>
            <th class="border-l-2 border-white px-1 py-1 w-1/5 bg-gray-200 sticky top-0" >Email</th>
            <th class="border-l-2 border-white px-1 py-1 w-1/5 bg-gray-200 sticky top-0">Status</th>
            <th class="border-l-2 border-white px-1 py-1 w-1/5 bg-gray-200 sticky top-0">Process</th>
        </tr>
        </thead>
        <tbody>
        <tr v-for="user in users" :key="user" class="border-b-2 shadow-md mt-10 bg-green-200 bg-opacity-50 cursor-pointer hover:bg-gray-100"  >
            <th class="px-1 py-1 ">{{ user.id}}</th>
            <th class="border-l-2 px-1 py-1 ">{{ user.name}}</th>
            <th class="border-l-2 px-1 py-1 ">{{ user.email}}</th>
            <th v-if="user.status === '1'" class="border-l-2 px-1 py-1">Waiting</th>
            <th class="border-l-2 px-1 py-1 " @click="confirm(user.id)">Confirm</th>
            
        </tr>

        </tbody>
        </table>
    </div>
</template>

<script>
import { Head } from '@inertiajs/inertia-vue3';

export default {
    components: {
        Head,
    },
    data(){
        return{
            users: [],
        }
    },
    mounted(){
        this.fetchData();
    },
    methods:{
            confirm(val){
                axios.post('admin-confirm',{'id':val}).then((res) => {
                        this.fetchData();
                })

         },
            fetchData(){
                axios.get(route('uncorfirmed')).then((res)=>{
                   res.data ? this.users = res.data : this.users[0].name = 'Hiç bir veri bulunamadı';
                });
         }


    }
}
</script>