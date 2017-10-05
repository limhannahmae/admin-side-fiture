Dropzone.options.addImages = {
	maxFilesize: 2,
	acceptedFiles: 'image/*',
	success: function(file, response) {
		if(file.status == 'success'){
			handleDropzoneFileUpload.handleSuccess(response);
		} else {
			handleDropzoneFileUpload.handleError(response);
		}
	}
};

var handleDropzoneFileUpload = {
	handleError: function(response){
		console.log(response);
	},
	handleSuccess: function(response){

		var imageList = $('#gallery-images ul');
		var imageSrc = baseUrl + '/' + response.file_name;
		$(imageList).append('<li><a href="' + imageSrc+ '"><img src="' + imageSrc+ '"> </a></li>');
	}
}
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

//require('./bootstrap');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

//Vue.component('example', require('./components/Example.vue'));

//const app = new Vue({
  //  el: '#app'
//});
$(document).ready(function(){

	console.log('Document is ready');
});
