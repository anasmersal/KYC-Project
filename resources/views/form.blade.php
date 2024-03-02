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

  
  <div class="kyc-form-container max-w-4xl mx-auto bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 mt-4">



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

      @php
$countries = [ 'Afghanistan', 'Albania', 'Algeria', 'Andorra', 'Angola', 'Antigua and Barbuda', 'Argentina', 'Armenia', 'Australia', 'Austria', 'Azerbaijan',
    'Bahamas', 'Bahrain', 'Bangladesh', 'Barbados', 'Belarus', 'Belgium', 'Belize', 'Benin', 'Bhutan', 'Bolivia', 'Bosnia and Herzegovina', 'Botswana', 'Brazil', 'Brunei', 'Bulgaria', 'Burkina Faso', 'Burundi',
    'Cabo Verde', 'Cambodia', 'Cameroon', 'Canada', 'Central African Republic', 'Chad', 'Chile', 'China', 'Colombia', 'Comoros', 'Congo, Democratic Republic of the', 'Congo, Republic of the', 'Costa Rica', 'Cote d\'Ivoire', 'Croatia', 'Cuba', 'Cyprus', 'Czech Republic',
    'Denmark', 'Djibouti', 'Dominica', 'Dominican Republic',
    'East Timor (Timor-Leste)', 'Ecuador', 'Egypt', 'El Salvador', 'Equatorial Guinea', 'Eritrea', 'Estonia', 'Eswatini', 'Ethiopia',
    'Fiji', 'Finland', 'France',
    'Gabon', 'Gambia', 'Georgia', 'Germany', 'Ghana', 'Greece', 'Grenada', 'Guatemala', 'Guinea', 'Guinea-Bissau', 'Guyana',
    'Haiti', 'Holy See', 'Honduras', 'Hungary',
    'Iceland', 'India', 'Indonesia', 'Iran', 'Iraq', 'Ireland', 'Israel', 'Italy',
    'Jamaica', 'Japan', 'Jordan',
    'Kazakhstan', 'Kenya', 'Kiribati', 'Korea, North', 'Korea, South', 'Kosovo', 'Kuwait', 'Kyrgyzstan',
    'Laos', 'Latvia', 'Lebanon', 'Lesotho', 'Liberia', 'Libya', 'Liechtenstein', 'Lithuania', 'Luxembourg',
    'Madagascar', 'Malawi', 'Malaysia', 'Maldives', 'Mali', 'Malta', 'Marshall Islands', 'Mauritania', 'Mauritius', 'Mexico', 'Micronesia', 'Moldova', 'Monaco', 'Mongolia', 'Montenegro', 'Morocco', 'Mozambique', 'Myanmar (Burma)',
    'Namibia', 'Nauru', 'Nepal', 'Netherlands', 'New Zealand', 'Nicaragua', 'Niger', 'Nigeria', 'North Macedonia', 'Norway',
    'Oman',
    'Pakistan', 'Palau', 'Palestine State', 'Panama', 'Papua New Guinea', 'Paraguay', 'Peru', 'Philippines', 'Poland', 'Portugal',
    'Qatar',
    'Romania', 'Russia', 'Rwanda',
    'Saint Kitts and Nevis', 'Saint Lucia', 'Saint Vincent and the Grenadines', 'Samoa', 'San Marino', 'Sao Tome and Principe', 'Saudi Arabia', 'Senegal', 'Serbia', 'Seychelles', 'Sierra Leone', 'Singapore', 'Slovakia', 'Slovenia', 'Solomon Islands', 'Somalia', 'South Africa', 'South Sudan', 'Spain', 'Sri Lanka', 'Sudan', 'Suriname', 'Sweden', 'Switzerland', 'Syria',
    'Taiwan', 'Tajikistan', 'Tanzania', 'Thailand', 'Togo', 'Tonga', 'Trinidad and Tobago', 'Tunisia', 'Turkey', 'Turkmenistan', 'Tuvalu',
    'Uganda', 'Ukraine', 'United Arab Emirates', 'United Kingdom', 'United States of America', 'Uruguay', 'Uzbekistan',
    'Vanuatu', 'Venezuela', 'Vietnam',
    'Yemen',
    'Zambia', 'Zimbabwe'];
@endphp

<div class="nationality mb-4">
  <label for="nationality" class="block text-gray-700 font-bold mb-2">Nationality</label>
  <select id="nationality" name="nationality" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
    <option value="">Select a country</option>
    @foreach($countries as $country)
      <option value="{{ $country }}">{{ $country }}</option>
    @endforeach
  </select>
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
        <input type="text" id="address" name="address" placeholder="Address" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
      </div>

      <div class="phone-number mb-4">
        <label for="phoneNumber" class="block text-gray-700 font-bold mb-2">2. Phone Number</label>
        <input type="tel" id="phoneNumber" name="phoneNumber" placeholder="(000) 000-0000" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
      </div>

      <div class="email mb-4">
        <label for="email" class="block text-gray-700 font-bold mb-2">3. Email</label>
        <input type="email" id="email" name="email" placeholder="example@example.com" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
      </div>

      <!-- Dynamic field section -->
      <div id="dynamic-fields">
        <!-- Dynamic fields will be added here -->
      </div>
      
      <h2 class="text-lg font-semibold mb-4">C. Declaration</h2>
      <div class="declaration mb-4">
        <p class="text-gray-700">I hereby declare that the information provided in this form is accurate and complete. I confirm that any information is found incorrect and/or incomplete that leads to a violation of regulations may initiate legal actions, and I accept that I am the responsible party for any and all charges, penalties and violations.</p>
      </div>



      <input type="hidden" id="dynamic_field_counter" name="dynamic_field_counter" value="0">

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
      <div id="dynamic-field-${fieldCounter}" class="dynamic-field mb-4 flex flex-wrap">
        <div class="w-full md:w-1/2 pr-4">
          <label for="dynamic_field_name_${fieldCounter}" class="block text-gray-700 font-bold mb-2">Field Name ${fieldCounter}</label>
          <input type="text" id="dynamic_field_name_${fieldCounter}" name="dynamic_field_name_${fieldCounter}" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>
        <div class="w-full md:w-1/2">
          <label for="dynamic_field_value_${fieldCounter}" class="block text-gray-700 font-bold mb-2 mt-2 md:mt-0">Field Value ${fieldCounter}</label>
          <input type="text" id="dynamic_field_value_${fieldCounter}" name="dynamic_field_value_${fieldCounter}" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>
        <button type="button" id="remove-field-btn-${fieldCounter}" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-4 rounded focus:outline-none focus:shadow-outline cursor-pointer mt-4 md:mt-4">Remove Field</button>
      </div>
    `;
    $('#dynamic-fields').append(dynamicField);

    // Event listener for the "Remove Field" button
    $(`#remove-field-btn-${fieldCounter}`).click(function() {
      $(`#dynamic-field-${fieldCounter}`).remove();
    });

    // Update the value of dynamic_field_counter
    $('#dynamic_field_counter').val(fieldCounter);
  }

  // Event listener for the "Add Field" button
  $('#add-field-btn').click(function() {
    generateDynamicField();
  });
});
  </script>
  

</body>

</html>