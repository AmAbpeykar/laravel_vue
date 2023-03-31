

<script setup>
import { ref } from 'vue'

var  show = ref(false)
var widthh = ref('w-[0%]')

var percenta = ref(0)
function showFunction(){


    widthh.value = 'w-[90%]'
    show.value = true


    if (percenta.value === 0) {
        var id = setInterval(inc, 13);
        function inc() {
            if (percenta.value >= 90) {
                clearInterval(id);

            } else {
                percenta.value ++;
            }
        }
    }

}

function hideFunction(){

    widthh.value = 'w-[0%]'
    percenta.value = 0
    show.value = false

}


</script>

<template>

    <div class="card" v-on:mouseenter="showFunction" v-on:mouseleave="hideFunction">
        <div class="face face1">
            <div class="content">
                <img  class="text-white" src="/images/adobe-illustrator-logo-775FAF240B-seeklogo.com.png">
                <h3>Illustrator</h3>
            </div>
        </div>
        <div class="face face2 peer relative" >
            <div class="content pt-0">
                <p class="leading-5 font-bold mt-0 pt-0">
                    Adobe Illustrator is a software application for creating drawings, illustrations, and artwork
                </p>
                <div class="w-full h-[25px] bg-gray-300 ">

                    <div  class="test text-center duration-[1.3s] bg-orange-900 h-[25px] mt-5" :class="widthh">


                            <p v-if="show" id="percent" class="text-white font-bold ">{{ percenta }}%</p>


                    </div>

                </div>
            </div>
        </div>
    </div>



</template>




