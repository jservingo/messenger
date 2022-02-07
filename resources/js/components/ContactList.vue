<template>
	<div>
		<b-form class="my-3 mx-2">
      <b-form-input class="text-center"
        type="text"
        placeholder="Buscar contacto ...">
      </b-form-input>
    </b-form>
      
	  <b-list-group>
	    <contact variant="dark"></contact> 
	    <contact variant=""></contact>
	    <contact variant="secondary"></contact>
	  </b-list-group>
  </div>	
</template>

<script>
  export default {
    mounted() {
      console.log('Component mounted.')
    }
  }
</script>