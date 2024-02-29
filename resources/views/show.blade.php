<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KYC Form Data</title>
    <!-- Add Tailwind CSS link -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- Add any additional head elements here -->
    <style>
        html {
            background-color: #f3f4f6; /* Set your desired background color here */
        }
    </style>
</head>

<body>

    <div class="kyc-form-container max-w-4xl mx-0 rounded px-8 pt-6 pb-8 mb-4">

        <div class="mt-4">
            <h2 class="text-lg font-semibold mb-2">Submitted KYC Form Information</h2>
            <table class="min-w-full divide-y divide-gray-200 mx-0">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Gender</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date of Birth</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Marital Status</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nationality</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Job Title</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Residency Status</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Proof of Identity</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">PAN</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">City</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Address</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Phone Number</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Extra fields</th>
                        <!-- Add more table headers for other fields as needed -->
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach ($informations as $info)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $info->name }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $info->gender }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $info->date_of_birth }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $info->marital_status }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $info->nationality }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $info->job_title }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $info->residency_status }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $info->proofOfIdentity }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $info->pan }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $info->city }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $info->address }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $info->phoneNumber }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $info->email }}</td>
                        @if ($info['dynamic_fields'] != "[]")
                        <td class="px-6 py-4 whitespace-nowrap">
                            @foreach(json_decode($info->dynamic_fields, true) as $key => $value)
                                {{ $key }}: {{ $value }}<br>
                            @endforeach
                        </td>
                        @else
                            <td></td>
                        @endif                    
                        <!-- Add more table cells for other fields as needed -->
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>
