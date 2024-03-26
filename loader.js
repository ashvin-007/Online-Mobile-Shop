document.addEventListener("DOMContentLoaded", function() {
    // Form submission event listener
    document.getElementById("form1").addEventListener("submit", function(event) {
      // Prevent default form submission
      event.preventDefault();
  
      // Show loader
      document.getElementById("loader").style.display = "block";
  
      // Simulate order processing delay (replace with actual Stripe processing)
      setTimeout(function() {
        // Hide loader after processing
        document.getElementById("loader").style.display = "none";
        
        // Optionally, redirect to a success page or show a success message
        alert("Order placed successfully!");
      }, 2000); // Adjust the delay time as needed
    });
  });
  