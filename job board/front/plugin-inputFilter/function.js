


    window.onload=function(){
      
// Restricts input for each element in the set of matched elements to the given inputFilter.
(function($) {
  $.fn.inputFilter = function(inputFilter) {
    return this.on("input keydown keyup mousedown mouseup select contextmenu drop", function() {
      if (inputFilter(this.value)) {
        this.oldValue = this.value;
        this.oldSelectionStart = this.selectionStart;
        this.oldSelectionEnd = this.selectionEnd;
      } else if (this.hasOwnProperty("oldValue")) {
        this.value = this.oldValue;
        this.setSelectionRange(this.oldSelectionStart, this.oldSelectionEnd);
      }
    });
  };
}(jQuery));
//allow only positive number for phone number input
$("#textbox_phone").inputFilter(function(value) {
  return /^\d*$/.test(value); });

  //allow only positive number for salary per hour input
$("#textbox_prehour").inputFilter(function(value) {
  return /^\d*$/.test(value); });

// Install input filters.
//$("#intTextBox").inputFilter(function(value) {
 // return /^-?\d*$/.test(value); });
//$("#uintTextBox").inputFilter(function(value) {
 // return /^\d*$/.test(value); });
//$("#intLimitTextBox").inputFilter(function(value) {
 // return /^\d*$/.test(value) && (value === "" || parseInt(value) <= 500); });
//$("#floatTextBox").inputFilter(function(value) {
  //return /^-?\d*[.,]?\d*$/.test(value); });
//$("#currencyTextBox").inputFilter(function(value) {
  //return /^-?\d*[.,]?\d{0,2}$/.test(value); });
//$("#hexTextBox").inputFilter(function(value) {
  //return /^[0-9a-f]*$/i.test(value); });

    }

