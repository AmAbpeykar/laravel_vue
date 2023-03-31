

<script setup>
import { ref } from 'vue'

var  show = ref(false)
var widthh = ref('w-[0%]')

var percent = ref(0)
function showFunction(){


    widthh.value = 'w-[85%]'
    show.value = true

    if (percent.value === 0) {
        var id = setInterval(inc, 13);
        function inc() {
            if (percent.value >= 80) {
                clearInterval(id);

            } else {
                percent.value ++;
            }
        }
    }

}

function hideFunction(){

    widthh.value = 'w-[0%]'
    percent.value = 0
    show.value = false


}


</script>

<template>

    <div class="card" v-on:mouseenter="showFunction" v-on:mouseleave="hideFunction">
        <div class="face face1">
            <div class="content">
                <img  class="text-white" src="/images/github-mark-white.png">
                <h3>Github</h3>
            </div>
        </div>
        <div class="face face2 peer relative" >
            <div class="content pt-0">
                <p class="leading-5 font-bold mt-0 pt-0">
                    GitHub is a code hosting platform for version control and collaboration.
                </p>
                <div class="w-full h-[25px] bg-gray-300 ">

                    <div  class="test text-center duration-[1.3s] bg-slate-900 h-[25px] mt-5" :class="widthh">


                            <p v-if="show" id="percent" class="text-white font-bold ">{{ percent }}%</p>


                    </div>

                </div>
            </div>
        </div>
    </div>



</template>



