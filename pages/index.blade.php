<paper>
    title: Chessy Marie - Registered Nurse
</paper>

@extends('layouts.default')

@section('content')
    @include('components.ui.header')
    <main class="pt-12 px-4 md:px-0">
        <section class="text-center max-w-screen-md mx-auto pb-10 pt-20 mb-12">
            <div class="relative shadow mx-auto h-24 w-24 -my-12 border-white rounded-full overflow-hidden border-2 mb-6">
                <img src="/images/chessy.jpg" alt="Chessy Marie">
            </div>
            <p class="mb-8">
                Hello! I am
                <strong>Chessy Marie</strong>. I have solid hospital nursing experience; a professional nurse with strong Emergency Room ER background.
            </p>
            <a href="https://www.linkedin.com/in/chessymarie/" target="_blank" rel="nofollow" class="px-4 py-3 text-gray-100 rounded hover:bg-teal-700 bg-teal-800 font-bold">Contact Me</a>
        </section>

        <section>
            <div id="licensing" class="max-w-screen-md mx-auto grid grid-cols-1 md:grid-cols-2 gap-4 mb-16">
                <div class="bg-white rounded-lg p-6 shadow-lg">
                    <h2 class="text-lg mb-4">Licenses</h2>
                    <ul class="list-disc list-inside text-gray-700">
                        <li>DHA - Dubai Health Authority</li>
                        <li>PRC - Philippines Nursing License</li>
                        <li>Saudi Nursing License</li>
                    </ul>
                </div>
                <div class="bg-white rounded-lg p-6 shadow-lg">
                    <h2 class="text-lg mb-4">Certificates</h2>
                    <ul class="list-disc list-inside text-gray-700">
                        <li>ACLS - Advanced Cardiovascular</li>
                        <li>BLS - Basic Life Support</li>
                        <li>Basic Electrocardiography</li>
                        <li>Cardiovascular Pharmacology</li>
                    </ul>
                </div>
            </div>

            <div id="work-experience" class="text-sm font-bold text-gray-700 max-w-screen-md mx-auto mb-16">
                <h2 class="text-center text-2xl mb-6">Work Experience</h2>
                <div class="mb-6 border-b border-gray-400 bg-white py-4 flex flex-col justify-between">
                    <div class="text-gray-700 font-bold text-xl mb-2">Dubai Health Authority</div>
                    <p class="text-gray-600">The Dubai Health Authority is a government organization overseeing the health system of Dubai.</p>
                    <div class="flex py-4">
                        <div class="w-3/4">
                            <span class="inline-block bg-teal-600 rounded-full px-3 py-1 text-sm font-semibold text-white">General Nurse</span>
                        </div>
                        <div class="w-1/4 align-middle">
                            <span class="float-right">Dec 2018 - Present</span>
                        </div>
                    </div>
                    <p class="text-gray-600">I am a nurse general</p>
                </div>

                <div class="mb-6 border-b border-gray-400 bg-white py-4 flex flex-col justify-between">
                    <div class="text-gray-700 font-bold text-xl mb-2">Al Garhoud Private Hospital</div>
                    <p class="text-gray-600">Garhoud Private Hospital is regionally known for its advanced service offering and departmental specialities with 72 private bed capacity, luxurious labour suites and state-of-the-art physical therapy facilities.</p>
                    <div class="flex py-4">
                        <div class="w-3/4">
                            <span class="inline-block bg-teal-600 rounded-full px-3 py-1 text-sm font-semibold text-white">Emergency Room Registered Nurse</span>
                        </div>
                        <div class="w-1/4 align-middle">
                            <span class="float-right">Nov 2016 - Nov 2018</span>
                        </div>
                    </div>
                    <p class="text-gray-600">Be part of specialised high qualified ER physicians with well trained ER-specialized nurses to deliver 24/7 emergency services.</p>
                </div>

                <div class="mb-6 border-b border-gray-400 bg-white py-4 flex flex-col justify-between">
                    <div class="text-gray-700 font-bold text-xl mb-2">Lifeline Healthcare UAE</div>
                    <p class="text-gray-600">Lifeline Hospital, Jebel Ali is the first luxury boutique hospital in the UAE and the first full-fledged hospital in New Dubai.</p>
                    <div class="flex py-4">
                        <div class="w-3/4">
                            <span class="inline-block bg-teal-600 rounded-full px-3 py-1 text-sm font-semibold text-white">ER Nurse</span>
                        </div>
                        <div class="w-1/4 align-middle">
                            <span class="float-right">June 2016 - October 2016</span>
                        </div>
                    </div>
                    <p class="text-gray-600">Work as part of a team with physicians, other nurses and healthcare professionals to provide care, monitor health conditions, plan long-term care needs, administer medicine, use medical equipment, perform minor medical operations, and advise patients and their families on illness, care and continued care after a hospital stay.</p>
                </div>

                <div class="mb-6 border-b border-gray-400 bg-white py-4 flex flex-col justify-between">
                    <div class="text-gray-700 font-bold text-xl mb-2">Babies &amp; Beyond UAE</div>
                    <p class="text-gray-600">Babies and Beyond Health Care offers a unique and personal partnership with parents in Dubai, to assist you every step of the way along your journey from pregnancy to parenthood.</p>
                    <div class="flex py-4">
                        <div class="w-3/4">
                            <span class="inline-block bg-teal-600 rounded-full px-3 py-1 text-sm font-semibold text-white">Pediatric Nurse</span>
                        </div>
                        <div class="w-1/4 align-middle">
                            <span class="float-right">March 2016 - May 2016</span>
                        </div>
                    </div>
                    <ul class="list-disc list-inside text-gray-600">
                        <li>Implement prescribed occupational, physical therapies.</li>
                        <li>Administer medications orally, intramuscularly, and by gastrointestinal tube.</li>
                        <li>Perform patient and family education on the special care children.</li>
                    </ul>
                </div>

                <div class="mb-6 border-b border-gray-400 bg-white py-4 flex flex-col justify-between">
                    <div class="text-gray-700 font-bold text-xl mb-2">Prince Abdul Mohsin General Hospital</div>
                    <p class="text-gray-600">Prince Abdul Mohsin General Hospital is a government hospital with 250-bed capacity located in Madinah, Saudi Arabia.</p>
                    <div class="flex py-4">
                        <div class="w-3/4">
                            <span class="inline-block bg-teal-600 rounded-full px-3 py-1 text-sm font-semibold text-white">ER Staff Nurse</span>
                        </div>
                        <div class="w-1/4 align-middle">
                            <span class="float-right">February 2008 - December 2014</span>
                        </div>
                    </div>
                    <p class="text-gray-650 mb-5">I am responsible for the nursing management of an average of nine patients per shift with medical, surgical, and pediatric concerns such as uncontrolled hypertension, diabetes, gastrointestinal disorders, vehicular accidents, cardiac arrest, post-operative complications, neonatal and pediatric disorders.</p>
                    <ul class="list-disc list-inside text-gray-600">
                        <li>Identify changes in a child’s symptoms.</li>
                        <li>Detect the abnormal physical findings.</li>
                        <li>Administer medication using age-appropriate guidelines.</li>
                        <li>Determine a child’s needs related to pain management.</li>
                    </ul>
                </div>
            </div>

            <div id="education" class="text-sm font-bold text-gray-700 max-w-screen-md mx-auto mb-16">
                <h2 class="text-center text-2xl mb-6">Education</h2>
                <div class="mb-6 border-b border-gray-400 bg-white py-4 flex flex-col justify-between">
                    <div class="text-gray-700 font-bold text-xl mb-2">Western Mindanao State University</div>
                    <p class="text-gray-600">The Western Mindanao State University is a state university located in Zamboanga City, Philippines.</p>
                    <div class="flex py-4">
                        <div class="w-3/4">
                            <span class="inline-block bg-blue-600 rounded-full px-3 py-1 text-sm font-semibold text-white">Bachelor's Degree, Nursing Science</span>
                        </div>
                        <div class="w-1/4 align-middle">
                            <span class="float-right">2003 - 2005</span>
                        </div>
                    </div>
                    <div class="flex py-4">
                        <div class="w-3/4">
                            <span class="inline-block bg-blue-600 rounded-full px-3 py-1 text-sm font-semibold text-white">Associate's Degree, Health Sciences</span>
                        </div>
                        <div class="w-1/4 align-middle">
                            <span class="float-right">2001 - 2003</span>
                        </div>
                    </div>
                </div>
            </div>

            <div id="skills" class="max-w-screen-md mx-auto mb-16">
                <h2 class="text-center text-2xl mb-6">Skills</h2>
                <div class="grid grid-cols-2 gap-4 text-white">
                    <div class="shadow w-full bg-grey-light">
                        <div class="bg-teal-600 py-1 text-center" style="width: 100%">Nursing</div>
                    </div>
                    <div class="shadow w-full bg-grey-light">
                        <div class="bg-teal-600 py-1 text-center" style="width: 98%">Pediatrics</div>
                    </div>
                    <div class="shadow w-full bg-grey-light">
                        <div class="bg-teal-600 py-1 text-center" style="width: 100%">Emergency</div>
                    </div>
                    <div class="shadow w-full bg-grey-light">
                        <div class="bg-teal-600 py-1 text-center" style="width: 95%">Inpatient</div>
                    </div>
                    <div class="shadow w-full bg-grey-light">
                        <div class="bg-teal-600 py-1 text-center" style="width: 98%">Treatment</div>
                    </div>
                    <div class="shadow w-full bg-grey-light">
                        <div class="bg-teal-600 py-1 text-center" style="width: 95%">Healthcare Management</div>
                    </div>
                    <div class="shadow w-full bg-grey-light">
                        <div class="bg-teal-600 py-1 text-center" style="width: 98%">Emergency Medicine</div>
                    </div>
                    <div class="shadow w-full bg-grey-light">
                        <div class="bg-teal-600 py-1 text-center" style="width: 98%">Medical Education</div>
                    </div>
                    <div class="shadow w-full bg-grey-light">
                        <div class="bg-teal-600 py-1 text-center" style="width: 98%">Patient Safety</div>
                    </div>
                    <div class="shadow w-full bg-grey-light">
                        <div class="bg-teal-600 py-1 text-center" style="width: 98%">Vital Signs</div>
                    </div>
                </div>
            </div>

            <div id="personal" class="max-w-screen-md mx-auto grid grid-cols-1 md:grid-cols-2 gap-4 mb-16">
                <div class="bg-white rounded-lg p-6 shadow-lg">
                    <h2 class="text-lg mb-4">Languages</h2>
                    <ul class="list-disc list-inside text-gray-700">
                        <li>English</li>
                        <li>Arabic</li>
                        <li>Filipino</li>
                    </ul>
                </div>
            </div>
        </section>
    </main>
    @include('components.ui.footer')
@endsection
