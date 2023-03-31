

<script setup>
import { ref } from 'vue'

var  show = ref(false)
var widthh = ref('w-[0%]')

var percentp = ref(0)
function showFunction(){


    widthh.value = 'w-[90%]'
    show.value = true

    if (percentp.value === 0) {
        var id = setInterval(inc, 13);
        function inc() {
            if (percentp.value >= 90) {
                clearInterval(id);

            } else {
                percentp.value ++;
            }
        }
    }

}

function hideFunction(){
    widthh.value = 'w-[0%]'
    percentp.value = 0
    show.value = false
}


</script>

<template>

    <div class="card" v-on:mouseenter="showFunction" v-on:mouseleave="hideFunction">
        <div class="face face1">
            <div class="content">
                <img id="phpimg" src="/images/new-php-logo.png">
                <h3>PHP</h3>
            </div>
        </div>
        <div class="face face2 peer relative" >
            <div class="content pt-0">
                <p class="leading-5 font-bold mt-0 pt-0">
                    PHP  is a widely-used open source general-purpose scripting language that is especially suited for web development.
                </p>
                <div class="w-full h-[25px] bg-gray-300 ">

                    <div  class="test text-center duration-[1.3s] bg-blue-700 h-[25px] mt-5" :class="widthh">


                            <p v-if="show" id="percent" class="text-white font-bold ">{{ percentp }}%</p>


                    </div>

                </div>
            </div>
        </div>
    </div>



</template>


