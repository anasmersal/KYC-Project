<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>KYC Form</title>
  <!-- Add Tailwind CSS link -->
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <!-- Add any additional head elements here -->
</head>

<body class="bg-gray-100">

  
  <div class="kyc-form-container max-w-4xl mx-auto bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">



    <form method="POST" action="/store">
      @csrf

      <h1 class="text-2xl text-center font-bold mb-4">KYC Form</h1>

      <h2 class="text-lg font-semibold mb-4">A. Identity Details</h2>

      <div class="applicant-name mb-4">
        <label for="name" class="block text-gray-700 font-bold mb-2">Name</label>
        <input type="text" id="name" name="name" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
      </div>

      <div class="gender mb-4">
        <label class="block text-gray-700 font-bold">Gender</label>
        <div>
          <input type="radio" id="male" name="gender" value="male" class="mr-1">
          <label for="male" class="mr-3">Male</label>
          <input type="radio" id="female" name="gender" value="female" class="mr-1">
          <label for="female">Female</label>
        </div>
      </div>

      <div class="marital-status mb-4">
        <label class="block text-gray-700 font-bold">Marital Status</label>
        <div>
          <input type="radio" id="single" name="marital_status" value="single" class="mr-1">
          <label for="single" class="mr-3">Single</label>
          <input type="radio" id="married" name="marital_status" value="married" class="mr-1">
          <label for="married" class="mr-3">Married</label>
          <input type="radio" id="divorced" name="marital_status" value="divorced" class="mr-1">
          <label for="divorced" class="mr-3">Divorced</label>
          <input type="radio" id="widowed" name="marital_status" value="widowed" class="mr-1">
          <label for="widowed">Widowed</label>
        </div>
      </div>

      <div class="date-of-birth mb-4">
        <label for="date_of_birth" class="block text-gray-700 font-bold mb-2">Date of Birth</label>
        <input type="date" id="date_of_birth" name="date_of_birth" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
      </div>

      <div class="nationality mb-4">
        <label for="nationality" class="block text-gray-700 font-bold mb-2">Nationality</label>
        <input type="text" id="nationality" name="nationality" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
      </div>

      <div class="job_title mb-4">
        <label for="job_title" class="block text-gray-700 font-bold mb-2">Job Title</label>
        <input type="text" id="job_title" name="job_title" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
      </div>

      <div class="status mb-4">
        <label class="block text-gray-700 font-bold">Status</label>
        <div>
          <input type="radio" id="resident" name="residency_status" value="resident" class="mr-1">
          <label for="resident" class="mr-3">Resident Individual</label>
          <input type="radio" id="nonResident" name="residency_status" value="nonResident" class="mr-1">
          <label for="nonResident" class="mr-3">Non Resident</label>
          <input type="radio" id="foreignNational" name="residency_status" value="foreignNational" class="mr-1">
          <label for="foreignNational">Foreign National</label>
        </div>
      </div>

      <div class="proof-of-identity mb-4">
        <label class="block text-gray-700 font-bold">Proof of Identity Submitted for PAN Exempt Cases</label>
        <div>
          <input type="radio" id="uid" name="proofOfIdentity" value="uid" class="mr-1">
          <label for="uid" class="mr-3">UID</label>
          <input type="radio" id="passport" name="proofOfIdentity" value="passport" class="mr-1">
          <label for="passport">Passport</label>
          <!-- Add other input options here -->
        </div>
      </div>

      <div class="pan mb-4">
        <label for="pan" class="block text-gray-700 font-bold mb-2">PAN</label>
        <input type="text" id="pan" name="pan" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
      </div>

      <!-- Address Details section goes here -->
      <h2 class="text-lg font-semibold mb-4">B. Address Details</h2>

      <div class="address-for-correspondence mb-4">
        <label for="streetAddress" class="block text-gray-700 font-bold mb-2">1. Address for Correspondence</label>
        <input type="text" id="city" name="city" placeholder="City" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mb-2">
        <input type="text" id="address" name="address" placeholder="address" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
      </div>

      <div class="phone-number mb-4">
        <label for="phoneNumber" class="block text-gray-700 font-bold mb-2">2. Phone Number</label>
        <input type="tel" id="phoneNumber" name="phoneNumber" placeholder="(000) 000-0000" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
      </div>

      <div class="email mb-4">
        <label for="email" class="block text-gray-700 font-bold mb-2">3. Email</label>
        <input type="email" id="email" name="email" placeholder="example@example.com" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
      </div>

      <h2 class="text-lg font-semibold mb-4">C. Declaration</h2>
      <div class="declaration mb-4">
        <p class="text-gray-700">I hereby declare that the information provided in this form is accurate and complete. I confirm that any information is found incorrect and/or incomplete that leads to a violation of regulations may initiate legal actions, and I accept that I am the responsible party for any and all charges, penalties and violations.</p>
      </div>

      <!-- Dynamic field section -->
      <div id="dynamic-fields">
        <!-- Dynamic fields will be added here -->
      </div>

      <!-- Button to add dynamic fields -->
      <button type="button" id="add-field-btn" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline cursor-pointer mb-4">Add Field</button>

      <!-- Declaration and submit button -->
      <!-- Your existing declaration -->
      <input type="submit" value="Submit" class="bg-green-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline cursor-pointer">

    </form>
  </div>

  <!-- Add jQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <script>
    $(document).ready(function() {
      // Counter for dynamic fields
      var fieldCounter = 0;
  
      // Function to generate a new dynamic field
      function generateDynamicField() {
        fieldCounter++;
        var dynamicField = `
        
          <div class="dynamic-field mb-4 flex flex-wrap">
            <div class="w-full md:w-1/2 pr-4">
              <label for="dynamic_field_name_${fieldCounter}" class="block text-gray-700 font-bold mb-2">Field Name ${fieldCounter}</label>
              <input type="text" id="dynamic_field_name_${fieldCounter}" name="dynamic_field_name_${fieldCounter}" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="w-full md:w-1/2">
              <label for="dynamic_field_value_${fieldCounter}" class="block text-gray-700 font-bold mb-2 mt-2 md:mt-0">Field Value ${fieldCounter}</label>
              <input type="text" id="dynamic_field_value_${fieldCounter}" name="dynamic_field_value_${fieldCounter}" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
          </div>
        `;
        $('#dynamic-fields').append(dynamicField);
      }
  
      // Event listener for the "Add Field" button
      $('#add-field-btn').click(function() {
        generateDynamicField();
      });
    });
  </script>

</body>

</html>