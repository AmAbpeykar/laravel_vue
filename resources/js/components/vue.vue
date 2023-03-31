

<script setup>
import { ref } from 'vue'

var  show = ref(false)
var widthh = ref('w-[0%]')

var percentv = ref(0)
function showFunction(){


    widthh.value = 'w-[80%]'
    show.value = true

    if (percentv.value === 0) {
        var id = setInterval(inc, 13);
        function inc() {
            if (percentv.value >= 81) {
                clearInterval(id);

            } else {
                percentv.value ++;
            }
        }
    }

}

function hideFunction(){

    widthh.value = 'w-[0%]'
    percentv.value = 0
    show.value = false
}


</script>

<template>

    <div class="card" v-on:mouseenter="showFunction" v-on:mouseleave="hideFunction">
        <div class="face face1">
            <div class="content">
                <img  src="/images/Vue.js_Logo_2.svg.png">
                <h3>Vue</h3>
            </div>
        </div>
        <div class="face face2 peer relative" >
            <div class="content pt-0">
                <p class="leading-5 font-bold mt-0 pt-0">
                    Vue  is a JavaScript framework for building user interfaces.
                </p>
                <div class="w-full h-[25px] bg-gray-300 ">

                    <div  class="test text-center duration-[1.3s] bg-teal-700 h-[25px] mt-5" :class="widthh">


                            <p v-if="show" id="percent" class="text-white font-bold ">{{ percentv }}%</p>


                    </div>

                </div>
            </div>
        </div>
    </div>



</template>




