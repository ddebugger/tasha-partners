@extends('layout.admin.app')

{{-- @section('breadcrumb')
@include(
    'layout.admin.content',
    [
        'title' => "Create New Session",
        'breadcrumbs' => ['Home', 'Training Sessions || Steps'],
        'button' => "Back",
        'button_onclick' => "goBack()",
        'end_text' => "Create a global company survey. Step through details, add managers, assign evaluators and launch."
    ])
@endsection --}}

@section('content')

    <div class="stepper-container-header">
        <div class="stepper-header">
            <div class="stepper">
                <div class="step-number active-step">1</div>
                <div class="step-detail">
                    <p>Session Details</p>
                    <span>Name, client, dates, questionnaire</span>
                </div>
            </div>

            <div class="stepper">
                <div class="step-number">2</div>
                <div class="step-detail">
                    <p>Add Managers</p>
                    <span>Select 15–20 managers</span>
                </div>
            </div>

            <div class="stepper">
                <div class="step-number">3</div>
                <div class="step-detail">
                    <p>Session Details</p>
                    <span>Name, client, dates, questionnaire</span>
                </div>
            </div>

            <div class="stepper">
                <div class="step-number">4</div>
                <div class="step-detail">
                    <p>Session Details</p>
                    <span>Name, client, dates, questionnaire</span>
                </div>
            </div>
        </div>

        <div class="stepper-progress">
            <div class="stepper-progress-bar">
                <div class="stepper-progress-fill" ></div>
            </div>
        </div>
    </div>


    <div id="step1" class="step-container active-step-content">
        <header>
            <h2>Session Details</h2>
            <p>General information about the training session. Fields marked with * are required.</p>
        </header>

        <div class="step-content">
            <!-- Left: Form -->
            <div class="form-section">
                <div class="form-grid">

                    <div class="form-group">
                        <label>Session Code</label>
                        <input type="text" placeholder="Auto-generated or custom (e.g. ENEO-Q3-2025)">
                    </div>

                    <div class="form-group">
                        <label>Session Name *</label>
                        <input type="text" value="Eneo Cameroon - Q3 Manager Training 2025">
                    </div>

                    <div class="form-group">
                        <label>Client *</label>
                        <div class="select">
                            <select>
                                <option>Eneo Cameroon S.A.</option>
                                <option>MTN Cameroon</option>
                                <option>Orange Cameroon</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Session Type *</label>

                        <div class="select">
                            <select>
                                <option>360° Manager Evaluation</option>
                                <option>360° Manager Evaluation</option>
                                <option>360° Manager Evaluation</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Questionnaire *</label>
                        <div class="select">
                            <select>
                                <option>360° Manager Evaluation - Default</option>
                                <option>360° Manager Evaluation - Default</option>
                                <option>360° Manager Evaluation - Default</option>
                                <option>360° Manager Evaluation - Default</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Start Date *</label>
                        <input type="date">
                    </div>

                    <div class="form-group">
                        <label>End Date *</label>
                        <input type="date">
                    </div>

                    <div class="form-group">
                        <label>Timezone</label>
                        <div class="select">
                            <select>
                                <option>Africa/Douala (WAT)</option>
                                <option>Africa/Douala (WAT)</option>
                                <option>Africa/Douala (WAT)</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Budget (XAF)</label>
                        <input type="number" placeholder="e.g. 300000">
                    </div>

                    <div class="form-group">
                        <label>Primary Contact</label>
                        <div class="select">
                            <select>
                                <option>Julie Liliane – Eneo Cameroon S.A.</option>
                                <option>Julie Liliane – Eneo Cameroon S.A.</option>
                                <option>Julie Liliane – Eneo Cameroon S.A.</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- Distribution Method -->
                <div class="form-group" style="margin-top: 15px">
                    <label>Distribution Method</label>
                    <div class="toggle-buttons">
                        <button type="button" class="toggle active">Email</button>
                        <button type="button" class="toggle">SMS</button>
                    </div>
                </div>

                <!-- Description -->
                <div class="form-group" style="margin-top: 15px">
                    <label>Description</label>
                    <textarea>360° evaluation on leadership competencies and values.</textarea>
                </div>
            </div>

            <!-- Right: Summary -->
            <div class="summary-card">
                <!-- Header -->
                <div class="summary-header">
                    <div class="icon">
                        <svg width="19" height="20" viewBox="0 0 19 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.49996 1.46686C9.34905 1.46686 9.19807 1.52429 9.08248 1.63849L8.10836 2.60179L6.78325 2.25389C6.46777 2.17037 6.14551 2.35824 6.05961 2.67214L5.70012 3.99339L4.37887 4.35366C4.06458 4.43916 3.87828 4.76221 3.96062 5.07729L4.30774 6.4024L3.34445 7.37575C3.11565 7.60692 3.11565 7.97955 3.34445 8.21071L4.30774 9.18483L3.95984 10.5099C3.87711 10.825 4.0638 11.1477 4.3781 11.2336L5.69934 11.5939L6.05961 12.9151C6.14551 13.229 6.46777 13.4169 6.78325 13.3326L8.10836 12.9855L9.08248 13.9488C9.19807 14.0631 9.34992 14.1196 9.50074 14.1196C9.65155 14.1196 9.80263 14.0628 9.91822 13.9488L10.8923 12.9855L12.2167 13.3334C12.5333 13.4173 12.8544 13.229 12.9403 12.9151L13.2998 11.5939L14.6211 11.2336C14.9353 11.1481 15.1216 10.825 15.0393 10.5099L14.6922 9.18483L15.6555 8.21071C15.8843 7.97955 15.8843 7.60732 15.6555 7.37575L14.6922 6.4024L15.0401 5.07729C15.1228 4.76221 14.9361 4.43955 14.6218 4.35366L13.3006 3.99339L12.9403 2.67214C12.8544 2.35824 12.5333 2.17037 12.2167 2.25389L10.8916 2.60179L9.91744 1.63849C9.80186 1.52429 9.65087 1.46686 9.49996 1.46686ZM7.87179 13.866L6.22506 14.2982C6.12689 14.3239 6.02892 14.3211 5.93669 14.299V18.2813C5.93669 18.5002 6.05703 18.7018 6.2498 18.8047C6.44257 18.9084 6.6777 18.8968 6.85979 18.7753L9.38941 17.0884C9.4567 17.0444 9.54247 17.044 9.60897 17.0884L12.1394 18.7745C12.2391 18.8414 12.3535 18.875 12.4687 18.875C12.5649 18.875 12.6607 18.8518 12.7486 18.8047C12.9414 18.7018 13.0625 18.5002 13.0625 18.2813V14.299C12.9706 14.3207 12.8723 14.3239 12.7741 14.2982L11.1274 13.866L9.91744 15.062C9.80186 15.1764 9.65 15.2337 9.49919 15.2337C9.34838 15.2337 9.19729 15.176 9.08171 15.062L7.87179 13.866Z" fill="#F59E0B"/>
                        </svg>
                    </div>
                    <h3>Session Summary</h3>
                </div>

                <!-- Info rows -->
                <div class="summary-row">
                    <p class="label">Type</p>
                    <p class="value"><a href="#">360° Manager Evaluation</a></p>
                </div>

                <div class="summary-row">
                    <p class="label">Questionnaire</p>
                    <p class="value"><a href="#">360° Manager Evaluation - Default</a></p>
                </div>

                <div class="summary-row">
                    <p class="label">Delivery</p>
                    <p class="value"><a href="#">15 MaEmaily 2025</a></p>
                </div>

                <!-- Tips -->
                <div class="tips">
                    <strong>Tips</strong>
                    <p>
                    Use a clear session code for exports.<br>
                    Confirm dates before launching — links have configurable expirations.<br>
                    Questionnaires can be edited in Questionnaire Management.
                    </p>
                </div>
            </div>
        </div>

        <div class="buttons">
            <span></span>
            <button class="btn-next" onclick="nextStep()">
                Next
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M19.6001 12.1813L20.0244 11.7571L20.4486 12.1813L20.0244 12.6056L19.6001 12.1813ZM5.05023 12.7813C4.71886 12.7813 4.45023 12.5127 4.45023 12.1813C4.45023 11.85 4.71886 11.5813 5.05023 11.5813V12.1813V12.7813ZM13.7802 6.36139L14.2044 5.93713L20.0244 11.7571L19.6001 12.1813L19.1758 12.6056L13.3559 6.78565L13.7802 6.36139ZM19.6001 12.1813L20.0244 12.6056L14.2044 18.4255L13.7802 18.0013L13.3559 17.577L19.1758 11.7571L19.6001 12.1813ZM19.6001 12.1813V12.7813H5.05023V12.1813V11.5813H19.6001V12.1813Z" fill="white"/>
                </svg>
            </button>
        </div>
    </div>

    <div id="step2" class="step-container">
        <header>
            <h2>Add Managers</h2>
            <p>Select the managers who will be evaluated in this session (15–20 recommended).</p>
        </header>

        <div class="step-content">
            <!-- Left: Form -->
            <div class="form-section">
                <div class="form-grid">

                    <div class="form-group">
                        <label>Session Code</label>
                        <input type="text" placeholder="Auto-generated or custom (e.g. ENEO-Q3-2025)">
                    </div>

                    <div class="form-group">
                        <label>Session Name *</label>
                        <input type="text" value="Eneo Cameroon - Q3 Manager Training 2025">
                    </div>

                    <div class="form-group">
                        <label>Client *</label>
                        <div class="select">
                            <select>
                                <option>Eneo Cameroon S.A.</option>
                                <option>MTN Cameroon</option>
                                <option>Orange Cameroon</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Session Type *</label>

                        <div class="select">
                            <select>
                                <option>360° Manager Evaluation</option>
                                <option>360° Manager Evaluation</option>
                                <option>360° Manager Evaluation</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Questionnaire *</label>
                        <div class="select">
                            <select>
                                <option>360° Manager Evaluation - Default</option>
                                <option>360° Manager Evaluation - Default</option>
                                <option>360° Manager Evaluation - Default</option>
                                <option>360° Manager Evaluation - Default</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Start Date *</label>
                        <input type="date">
                    </div>

                    <div class="form-group">
                        <label>End Date *</label>
                        <input type="date">
                    </div>

                    <div class="form-group">
                        <label>Timezone</label>
                        <div class="select">
                            <select>
                                <option>Africa/Douala (WAT)</option>
                                <option>Africa/Douala (WAT)</option>
                                <option>Africa/Douala (WAT)</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Budget (XAF)</label>
                        <input type="number" placeholder="e.g. 300000">
                    </div>

                    <div class="form-group">
                        <label>Primary Contact</label>
                        <div class="select">
                            <select>
                                <option>Julie Liliane – Eneo Cameroon S.A.</option>
                                <option>Julie Liliane – Eneo Cameroon S.A.</option>
                                <option>Julie Liliane – Eneo Cameroon S.A.</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- Distribution Method -->
                <div class="form-group" style="margin-top: 15px">
                    <label>Distribution Method</label>
                    <div class="toggle-buttons">
                        <button type="button" class="toggle active">Email</button>
                        <button type="button" class="toggle">SMS</button>
                    </div>
                </div>

                <!-- Description -->
                <div class="form-group" style="margin-top: 15px">
                    <label>Description</label>
                    <textarea>360° evaluation on leadership competencies and values.</textarea>
                </div>
            </div>

            <!-- Right: Summary -->
            <div class="summary-card">
                <!-- Header -->
                <div class="summary-header">
                    <div class="icon">
                        <svg width="19" height="20" viewBox="0 0 19 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.49996 1.46686C9.34905 1.46686 9.19807 1.52429 9.08248 1.63849L8.10836 2.60179L6.78325 2.25389C6.46777 2.17037 6.14551 2.35824 6.05961 2.67214L5.70012 3.99339L4.37887 4.35366C4.06458 4.43916 3.87828 4.76221 3.96062 5.07729L4.30774 6.4024L3.34445 7.37575C3.11565 7.60692 3.11565 7.97955 3.34445 8.21071L4.30774 9.18483L3.95984 10.5099C3.87711 10.825 4.0638 11.1477 4.3781 11.2336L5.69934 11.5939L6.05961 12.9151C6.14551 13.229 6.46777 13.4169 6.78325 13.3326L8.10836 12.9855L9.08248 13.9488C9.19807 14.0631 9.34992 14.1196 9.50074 14.1196C9.65155 14.1196 9.80263 14.0628 9.91822 13.9488L10.8923 12.9855L12.2167 13.3334C12.5333 13.4173 12.8544 13.229 12.9403 12.9151L13.2998 11.5939L14.6211 11.2336C14.9353 11.1481 15.1216 10.825 15.0393 10.5099L14.6922 9.18483L15.6555 8.21071C15.8843 7.97955 15.8843 7.60732 15.6555 7.37575L14.6922 6.4024L15.0401 5.07729C15.1228 4.76221 14.9361 4.43955 14.6218 4.35366L13.3006 3.99339L12.9403 2.67214C12.8544 2.35824 12.5333 2.17037 12.2167 2.25389L10.8916 2.60179L9.91744 1.63849C9.80186 1.52429 9.65087 1.46686 9.49996 1.46686ZM7.87179 13.866L6.22506 14.2982C6.12689 14.3239 6.02892 14.3211 5.93669 14.299V18.2813C5.93669 18.5002 6.05703 18.7018 6.2498 18.8047C6.44257 18.9084 6.6777 18.8968 6.85979 18.7753L9.38941 17.0884C9.4567 17.0444 9.54247 17.044 9.60897 17.0884L12.1394 18.7745C12.2391 18.8414 12.3535 18.875 12.4687 18.875C12.5649 18.875 12.6607 18.8518 12.7486 18.8047C12.9414 18.7018 13.0625 18.5002 13.0625 18.2813V14.299C12.9706 14.3207 12.8723 14.3239 12.7741 14.2982L11.1274 13.866L9.91744 15.062C9.80186 15.1764 9.65 15.2337 9.49919 15.2337C9.34838 15.2337 9.19729 15.176 9.08171 15.062L7.87179 13.866Z" fill="#F59E0B"/>
                        </svg>
                    </div>
                    <h3>Session Summary</h3>
                </div>

                <!-- Info rows -->
                <div class="summary-row">
                    <p class="label">Type</p>
                    <p class="value"><a href="#">360° Manager Evaluation</a></p>
                </div>

                <div class="summary-row">
                    <p class="label">Questionnaire</p>
                    <p class="value"><a href="#">360° Manager Evaluation - Default</a></p>
                </div>

                <div class="summary-row">
                    <p class="label">Delivery</p>
                    <p class="value"><a href="#">15 MaEmaily 2025</a></p>
                </div>

                <!-- Tips -->
                <div class="tips">
                    <strong>Tips</strong>
                    <p>
                    Use a clear session code for exports.<br>
                    Confirm dates before launching — links have configurable expirations.<br>
                    Questionnaires can be edited in Questionnaire Management.
                    </p>
                </div>
            </div>
        </div>

        <div class="buttons">
            <button class="btn-back" onclick="prevStep()">Back</button>
            <button class="btn-next" onclick="nextStep()">
                Next
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M19.6001 12.1813L20.0244 11.7571L20.4486 12.1813L20.0244 12.6056L19.6001 12.1813ZM5.05023 12.7813C4.71886 12.7813 4.45023 12.5127 4.45023 12.1813C4.45023 11.85 4.71886 11.5813 5.05023 11.5813V12.1813V12.7813ZM13.7802 6.36139L14.2044 5.93713L20.0244 11.7571L19.6001 12.1813L19.1758 12.6056L13.3559 6.78565L13.7802 6.36139ZM19.6001 12.1813L20.0244 12.6056L14.2044 18.4255L13.7802 18.0013L13.3559 17.577L19.1758 11.7571L19.6001 12.1813ZM19.6001 12.1813V12.7813H5.05023V12.1813V11.5813H19.6001V12.1813Z" fill="white"/>
                </svg>
            </button>
        </div>
    </div>

    <div id="step3" class="step-container">
        <h2>Step 3: Assign Evaluators</h2>
        <p>Content for step 3...</p>

        <div class="buttons">
            <button class="btn-back" onclick="prevStep()">Back</button>
            <button class="btn-next" onclick="nextStep()">
                Next
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M19.6001 12.1813L20.0244 11.7571L20.4486 12.1813L20.0244 12.6056L19.6001 12.1813ZM5.05023 12.7813C4.71886 12.7813 4.45023 12.5127 4.45023 12.1813C4.45023 11.85 4.71886 11.5813 5.05023 11.5813V12.1813V12.7813ZM13.7802 6.36139L14.2044 5.93713L20.0244 11.7571L19.6001 12.1813L19.1758 12.6056L13.3559 6.78565L13.7802 6.36139ZM19.6001 12.1813L20.0244 12.6056L14.2044 18.4255L13.7802 18.0013L13.3559 17.577L19.1758 11.7571L19.6001 12.1813ZM19.6001 12.1813V12.7813H5.05023V12.1813V11.5813H19.6001V12.1813Z" fill="white"/>
                </svg>
            </button>
        </div>
    </div>

    <div id="step4" class="step-container">
        <h2>Step 4: Review & Launch</h2>
        <p>Content for step 4...</p>
        <div class="buttons">
            <button class="btn-back" onclick="prevStep()">Back</button>
            <button class="btn-next" onclick="submitWizard()">
                Finish
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M19.6001 12.1813L20.0244 11.7571L20.4486 12.1813L20.0244 12.6056L19.6001 12.1813ZM5.05023 12.7813C4.71886 12.7813 4.45023 12.5127 4.45023 12.1813C4.45023 11.85 4.71886 11.5813 5.05023 11.5813V12.1813V12.7813ZM13.7802 6.36139L14.2044 5.93713L20.0244 11.7571L19.6001 12.1813L19.1758 12.6056L13.3559 6.78565L13.7802 6.36139ZM19.6001 12.1813L20.0244 12.6056L14.2044 18.4255L13.7802 18.0013L13.3559 17.577L19.1758 11.7571L19.6001 12.1813ZM19.6001 12.1813V12.7813H5.05023V12.1813V11.5813H19.6001V12.1813Z" fill="white"/>
                </svg>
            </button>
        </div>
    </div>

@endsection

@push('special-scripts')
    <script>
        // ==================Function for steppers===================
        let currentStep = 1;
        const totalSteps = 4;

        function showStep(step) {
            // Update step content visibility
            for (let i = 1; i <= totalSteps; i++) {
                document
                    .getElementById("step" + i)
                    .classList.remove("active-step-content");
            }
            document.getElementById("step" + step).classList.add("active-step-content");

            // Update step circles
            const stepNumbers = document.querySelectorAll(".step-number");
            stepNumbers.forEach((el, index) => {
                el.classList.remove("active-step");
                if (index < step) {
                    el.classList.add("active-step");
                }
            });

            // Update progress bar
            const progressFill = document.querySelector(".stepper-progress-fill");
            let percent = ((step -1 ) / (totalSteps -1 )) * 100;
            progressFill.style.width = percent + "%";
        }

        function nextStep() {
            if (currentStep < totalSteps) {
                currentStep++;
                showStep(currentStep);
            }
        }

        function prevStep() {
            if (currentStep > 1) {
                currentStep--;
                showStep(currentStep);
            }
        }

        function submitWizard() {
            alert("Wizard Completed!");
        }

        // Initialize on first load
        showStep(currentStep);


        // Toggle active state for distribution method
  const toggles = document.querySelectorAll(".toggle");
  toggles.forEach(btn => {
    btn.onclick = () => {
      toggles.forEach(b => b.classList.remove("active"));
      btn.classList.add("active");
    };
  });
    </script>
@endpush
