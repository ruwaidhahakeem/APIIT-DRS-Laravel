<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('room') }} {{ $room }}
        </h2>
    </x-slot>

    <div class="py-12 flex flex-col md:flex-row md:justify-center ">

        <div class="py-12 flex flex-col md:flex-row md:justify-center ">
            <div class="md:flex flex-col">


                <div class="space-y-2 p-10">
                    <div class="flex flex-wrap -mx-3 mb-6 ">
                        <div class="w-full px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                for="grid-date">
                                Date
                            </label>
                            <select
                                class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                id="grid-date" name="date">
                                <option value="{{ date('Y-m-d') }}">{{ date('Y-m-d') }}</option>
                                <option value="{{ date('Y-m-d', strtotime('+1 day')) }}">
                                    {{ date('Y-m-d', strtotime('+1 day')) }}</option>
                                <option value="{{ date('Y-m-d', strtotime('+2 days')) }}">
                                    {{ date('Y-m-d', strtotime('+2 days')) }}</option>
                            </select>
                        </div>
                    </div class="md:items-center">
                    <h2 class="text-center text-sm uppercase text-gray-600">timeslot 1</h2>
                    <div
                        class="relative flex w-56 items-center justify-center rounded-full bg-gray-50 px-4 py-3 font-medium text-gray-700">
                        <input class="peer hidden" type="radio" name="timeslot" id="timeslot1" checked />
                        <label
                            class="peer-checked:border-orange-600 absolute top-0 h-full w-full cursor-pointer rounded-full border"
                            for="timeslot1"> </label>
                        <div
                            class="peer-checked:border-transparent peer-checked:bg-orange-600 peer-checked:ring-2 absolute left-4 h-5 w-5 rounded-full border-2 border-gray-300 bg-gray-200 ring-orange-600 ring-offset-2">
                        </div>
                        <span>9 AM - 11 AM</span>
                    </div>
                    <div
                        class="relative flex w-56 items-center justify-center rounded-full bg-gray-50 px-4 py-3 font-medium text-gray-700">
                        <input class="peer hidden" type="radio" name="timeslot" id="timeslot2" />
                        <label
                            class="peer-checked:border-sky-500 absolute top-0 h-full w-full cursor-pointer rounded-full border"
                            for="timeslot2"> </label>
                        <div
                            class="peer-checked:border-transparent peer-checked:bg-sky-500 peer-checked:ring-2 absolute left-4 h-5 w-5 rounded-full border-2 border-gray-300 bg-gray-200 ring-sky-500 ring-offset-2">
                        </div>
                        <span>11 AM - 1 PM</span>
                    </div>
                    <div
                        class="relative flex w-56 items-center justify-center rounded-full bg-gray-50 px-4 py-3 font-medium text-gray-700">
                        <input class="peer hidden" type="radio" name="timeslot" id="timeslot3" />
                        <label
                            class="peer-checked:border-emerald-400 absolute top-0 h-full w-full cursor-pointer rounded-full border"
                            for="timeslot3"> </label>
                        <div
                            class="peer-checked:border-transparent peer-checked:bg-emerald-400 peer-checked:ring-2 absolute left-4 h-5 w-5 rounded-full border-2 border-gray-300 bg-gray-200 ring-emerald-400 ring-offset-2">
                        </div>
                        <span>1 PM - 3 PM</span>
                    </div>
                    <div
                        class="relative flex w-56 items-center justify-center rounded-full bg-gray-50 px-4 py-3 font-medium text-gray-700">
                        <input class="peer hidden" type="radio" name="timeslot" id="timeslot4" />
                        <label
                            class="peer-checked:border-yellow-400 absolute top-0 h-full w-full cursor-pointer rounded-full border"
                            for="timeslot4"> </label>
                        <div
                            class="peer-checked:border-transparent peer-checked:bg-yellow-400 peer-checked:ring-2 absolute left-4 h-5 w-5 rounded-full border-2 border-gray-300 bg-gray-200 ring-emerald-400 ring-offset-2">
                        </div>
                        <span>3 PM - 5 PM</span>
                    </div>
                </div>
            </div>

            <div>
                <form class="w-full max-w-lg">
                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full md:w-1/2 px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                for="grid-student-count">
                                Number of Students
                            </label>
                            <input
                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                id="grid-student-count" type="number" name="student_count"
                                oninput="updateStudentCBFields()">
                        </div>
                        <div class="w-full md:w-1/2 px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                for="grid-student-cb">
                                Student CB Numbers
                            </label>
                            <div id="student-cb-container">
                                <input
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                    type="text" name="student_cb_number[]" placeholder="CB000000">

                            </div>

                            <script>
                                function updateStudentCBFields() {
                                    var studentCount = document.getElementById('grid-student-count').value;
                                    var container = document.getElementById('student-cb-container');
                                    container.innerHTML = '';

                                    for (var i = 0; i < studentCount; i++) {
                                        var input = document.createElement('input');
                                        input.className =
                                            'appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500';
                                        input.type = 'text';
                                        input.name = 'student_cb_number[]';
                                        input.placeholder = 'CB000000';

                                        container.appendChild(input);
                                    }
                                }

                                function addStudentCBField() {
                                    var container = document.getElementById('student-cb-container');

                                    var input = document.createElement('input');
                                    input.className =
                                        'appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500';
                                    input.type = 'text';
                                    input.name = 'student_cb_number[]';
                                    input.placeholder = 'CB000000';

                                    container.appendChild(input);
                                }
                            </script>


                            <div class="flex flex-wrap -mx-3 mb-6">
                                <div class="w-full px-3">
                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                        for="grid-purpose">
                                        Purpose
                                    </label>
                                    <select
                                        class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                        id="grid-purpose" name="purpose">
                                        <option value="exam">Exam</option>
                                        <option value="assignment">Assignment</option>
                                        <option value="interview">Interview</option>
                                    </select>
                                </div>
                            </div>




                            <div class="flex flex-wrap -mx-3 mb-6">
                                <div class="w-full px-3">
                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                        for="grid-purpose-details">
                                        Explaination and Extra Remarks
                                    </label>
                                    <textarea
                                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                        id="grid-purpose-details" name="purpose_details" rows=""></textarea>
                                </div>
                            </div>

                            <div class="flex flex-wrap -mx-3 mb-6">
                                <div class="w-full px-3">
                                    <button
                                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                                        type="submit">
                                        Submit
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>


    </div>
</x-app-layout>
