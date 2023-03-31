

<script setup>
import { ref } from 'vue'

var  show = ref(false)
var widthh = ref('w-[0%]')

var percent = ref(0)
function showFunction(){


    widthh.value = 'w-[75%]'
    show.value = true

    if (percent.value === 0) {
        var id = setInterval(inc, 13);
        function inc() {
            if (percent.value >= 70) {
                clearInterval(id);

            } else {
                percent.value ++;
            }
        }
    }

}

function hideFunction(){

    widthh.value = 'w-[0%]'
    show.value = false
    percent.value = 0


}


</script>

<template>

    <div class="card" v-on:mouseenter="showFunction" v-on:mouseleave="hideFunction">
        <div class="face face1">
            <div class="content">
                <img id="jqueryimg" class="text-white" src="/images/mysql.png">
                <h3>Mysql</h3>
            </div>
        </div>
        <div class="face face2 peer relative" >
            <div class="content pt-0">
                <p class="leading-5 font-bold mt-0 pt-0">
                    MySQL is an open-source relational database management system.
                </p>
                <div class="w-full h-[25px] bg-gray-300 ">

                    <div  class="test text-center duration-[1.3s] bg-sky-700 h-[25px] mt-5" :class="widthh">


                            <p v-if="show" id="percent" class="text-white font-bold ">{{ percent }}%</p>


                    </div>

                </div>
            </div>
        </div>
    </div>



</template>




