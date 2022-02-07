<template>
	<b-list-group-item :variant="variantContact">
	  <b-row class="p-2" align-h="center">
	    <b-col cols="12" md="3" class="text-center">
	      <b-img rounded="circle" blank width="60" height="60" blank-color="8777" alt="img" class="m-1" />
	    </b-col>
	    <b-col cols="7" align-self="center" class="d-sm-none d-md-block">
	      <p class="mb-1">{{ name }}</p>
	      <p class="text-muted small mb-0">{{ lastMessage }}</p>
	    </b-col>
	    <b-col cols="2" class="d-sm-none d-md-block">
	      <p class="text-muted small">{{ lastTime }}</p>
	    </b-col>
	  </b-row>
	</b-list-group-item> 
</template>

<script>
  export default {
  	props: [
  		'variantContact'
  	],
  	data() {
  		return {
	  		name: 'Peter',
	  		lastMessage: 'Hasta luego',
	  		lastTime: '1:37 pm',
	  		variant: 'dark'
	  	}; 
  	},
    mounted() {
      console.log('Component mounted.')
    }
  }
</script>