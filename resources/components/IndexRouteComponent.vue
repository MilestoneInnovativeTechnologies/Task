<template>
    <h1 v-if="$store.state.admin" style="color: #E7E7E7; text-align: center" class="my-5">Select reseller from side bar!</h1>
    <div v-else><div class="my-5 mx-auto" style="width: 650px;"><img alt="ABM" src="https://lh3.googleusercontent.com/v3Az8T_ZqWUqoMFIdEIn5pbfTFGbpI6C8voje62FOO9i41Bdqdxz_YXlsclxDJryPieTBotWT8ptq0uLpd-00dkrCj-M7h6MR272CkKpLFUm1Ps7Ix_NT7oCiymYuiXh7IGoDCC6=w320-h240-no" class="img-fluid"><img alt="MCI" src="https://lh3.googleusercontent.com/ftA_iVdTLLTjS7TtI3xNIh5jvj0lS3pcvPno2AolInGJHB1_KYoBPgpurDBUPDzeup4rSRU7tQMuhQSvKN-huq8mOfTHgoWzTIRTcNRwur5NRnsfsDNhvbFesZlUREfw4wgfLt-q=w320-h240-no" class="img-fluid"></div><hr /><div class="text-center mb-5"><router-link v-for="(link,idx) in links" :key="'rl-'+idx" :to="{ name:link }" class="btn btn-info mx-1">{{ link }}</router-link></div></div>
</template>

<script>
    export default {
        name: "IndexRouteComponent",
        data(){ return { links:['Compliance'] } },

    }
</script>