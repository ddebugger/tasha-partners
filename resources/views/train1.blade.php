@extends('layout.admin.app')

@section('breadcrumb')
@include(
    'layout.admin.content',
    [
        'title' => "Create New Session",
        'breadcrumbs' => ['Home', 'Training Sessions || Steps'],
        'button' => "Back",
        'button_onclick' => "goBack()",
        'end_text' => "Create a global company survey. Step through details, add managers, assign evaluators and launch."
    ])
@endsection

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
            <div class="form-section section">
                <div class="table-container except">
                    <header>
                        <div class="search-input">
                            <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M14.5039 13.8306L12.2123 11.5902L12.1586 11.5085C12.0587 11.409 11.9221 11.353 11.7796 11.353C11.6371 11.353 11.5005 11.409 11.4007 11.5085C9.45315 13.2952 6.45226 13.3923 4.38817 11.7354C2.32407 10.0786 1.83728 7.18185 3.25062 4.96638C4.66396 2.75092 7.53888 1.90417 9.96873 2.98769C12.3986 4.07122 13.6294 6.7488 12.8448 9.24467C12.7883 9.42497 12.8345 9.62105 12.966 9.75905C13.0975 9.89704 13.2942 9.95598 13.4822 9.91366C13.6702 9.87135 13.8208 9.7342 13.8773 9.5539C14.8151 6.59203 13.3987 3.40464 10.5442 2.05364C7.68982 0.702644 4.25406 1.59349 2.45953 4.14988C0.66501 6.70628 1.05028 10.161 3.36612 12.2793C5.68195 14.3975 9.23335 14.5435 11.7229 12.6229L13.7519 14.6066C13.9615 14.8106 14.3003 14.8106 14.5098 14.6066C14.7192 14.3997 14.7192 14.0667 14.5098 13.8598L14.5039 13.8306Z" fill="#667085"/>
                            </svg>
                            <input type="text" placeholder="Search name, role or com...">
                        </div>

                        <div class="action-btns">

                            <div class="btn">
                                <div class="icon">
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4.79642 9.09283H13.3317M2.6626 4.8252H15.4655M6.93024 13.3605H11.1979" stroke="#344054" stroke-width="1.42539" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    Sort By:
                                </div>
                                <select name="" id="">
                                    <option value="">ALl</option>
                                    <option value="">Ongoing</option>
                                    <option value="">Completed</option>
                                    <option value="">Draft</option>
                                </select>
                            </div>

                            <div class="btn">
                                <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.98779 4.58691L9.98779 13.5993" stroke="#33363F" stroke-width="1.50207" stroke-linecap="round"/>
                                    <path d="M14.4941 9.09277L5.48175 9.09277" stroke="#33363F" stroke-width="1.50207" stroke-linecap="round"/>
                                </svg>
                                Add Filter
                            </div>
                        </div>
                    </header>

                    <table>
                        <thead>
                            <tr>
                                <th>
                                    <div class="input">
                                        <input type="checkbox">
                                        <p>
                                            COMPANY
                                            <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.56994 2.81934V10.26M6.56994 10.26L10.2903 6.53966M6.56994 10.26L2.84961 6.53966" stroke="#667085" stroke-width="1.06295" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </p>
                                    </div>
                                </th>

                                <th>
                                    <p>
                                        NAME
                                        <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M6.56994 2.81934V10.26M6.56994 10.26L10.2903 6.53966M6.56994 10.26L2.84961 6.53966" stroke="#667085" stroke-width="1.06295" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </p>
                                </th>

                                <th>
                                    <p>
                                        LOCATION
                                        <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M6.56994 2.81934V10.26M6.56994 10.26L10.2903 6.53966M6.56994 10.26L2.84961 6.53966" stroke="#667085" stroke-width="1.06295" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </p>
                                </th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>
                                    <div class="input">
                                        <input type="checkbox">
                                        <div class="content">
                                            <div class="profile">
                                                <img src="{{asset('images/mtn.png')}}" alt="">
                                            </div>
                                            <div class="info">
                                                <p>MTN Cameroon</p>
                                                <span>Telecommunications</span>
                                            </div>
                                        </div>
                                    </div>
                                </td>

                                <td>
                                    <div class="content">
                                        <div class="survey">
                                            ES
                                        </div>
                                        <div class="info">
                                            <p>Etienne Shey</p>
                                            <span>Regional Manager</span>
                                        </div>
                                    </div>
                                </td>

                                <td>
                                    <div class="town">
                                        Yaounde
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <div class="input">
                                        <input type="checkbox">
                                        <div class="content">
                                            <div class="profile">
                                                <img src="{{asset('images/eneo.png')}}" alt="">
                                            </div>
                                            <div class="info">
                                                <p>Eneo Cameroon S.A.</p>
                                                <span>Energy</span>
                                            </div>
                                        </div>
                                    </div>
                                </td>

                                <td>
                                    <div class="content">
                                        <div class="survey">
                                            TB
                                        </div>
                                        <div class="info">
                                            <p>Teneng Brandon</p>
                                            <span>Regional Coordinator</span>
                                        </div>
                                    </div>
                                </td>

                                <td>
                                    <div class="town">
                                        Bamenda
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <div class="input">
                                        <input type="checkbox">
                                        <div class="content">
                                            <div class="profile">
                                                <img src="{{asset('images/orange.png')}}" alt="">
                                            </div>
                                            <div class="info">
                                                <p>Orange Cameroon</p>
                                                <span>Telecommunications</span>
                                            </div>
                                        </div>
                                    </div>
                                </td>

                                <td>
                                    <div class="content">
                                        <div class="survey">
                                            SN
                                        </div>
                                        <div class="info">
                                            <p>Samuel Ndifor</p>
                                            <span>Training Coordinator</span>
                                        </div>
                                    </div>
                                </td>

                                <td>
                                    <div class="town">
                                        Kribi
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <div class="input">
                                        <input type="checkbox">
                                        <div class="content">
                                            <div class="profile">
                                                <img src="{{asset('images/mtn.png')}}" alt="">
                                            </div>
                                            <div class="info">
                                                <p>MTN Cameroon</p>
                                                <span>Telecommunications</span>
                                            </div>
                                        </div>
                                    </div>
                                </td>

                                <td>
                                    <div class="content">
                                        <div class="survey">
                                            JD
                                        </div>
                                        <div class="info">
                                            <p>John Doe</p>
                                            <span>Regional leadership </span>
                                        </div>
                                    </div>
                                </td>

                                <td>
                                    <div class="town">
                                        Douala
                                    </div>
                                </td>
                            </tr>

                        </tbody>
                    </table>

                    <div class="pagination">
                        <button id="prevBtn" onclick="handlePrev()">Previous</button>
                        <button id="nextBtn" onclick="handleNext()">Next</button>
                    </div>
                </div>
            </div>

            <!-- Right: Summary -->
            <div class="summary-card">
                <!-- Header -->
                <div class="summary-header">
                    <div class="icon">
                        <svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5.75977 8.3125C4.44995 8.3125 3.38477 7.24731 3.38477 5.9375C3.38477 4.62769 4.44995 3.5625 5.75977 3.5625C7.06958 3.5625 8.13477 4.62769 8.13477 5.9375C8.13477 7.24731 7.06958 8.3125 5.75977 8.3125ZM10.1139 12.2708C8.80412 12.2708 7.73893 11.2056 7.73893 9.89583C7.73893 8.58602 8.80412 7.52083 10.1139 7.52083C11.4237 7.52083 12.4889 8.58602 12.4889 9.89583C12.4889 11.2056 11.4237 12.2708 10.1139 12.2708ZM10.1139 5.14583C9.02262 5.14583 8.13477 4.25798 8.13477 3.16667C8.13477 2.07535 9.02262 1.1875 10.1139 1.1875C11.2052 1.1875 12.0931 2.07535 12.0931 3.16667C12.0931 4.25798 11.2052 5.14583 10.1139 5.14583ZM14.4681 8.3125C13.1583 8.3125 12.0931 7.24731 12.0931 5.9375C12.0931 4.62769 13.1583 3.5625 14.4681 3.5625C15.7779 3.5625 16.8431 4.62769 16.8431 5.9375C16.8431 7.24731 15.7779 8.3125 14.4681 8.3125ZM10.1139 17.8125C8.11616 17.8125 6.55143 16.7691 6.55143 15.4375V14.4479C6.55143 13.684 7.17289 13.0625 7.93685 13.0625H12.291C13.055 13.0625 13.6764 13.684 13.6764 14.4479V15.4375C13.6764 16.7691 12.1117 17.8125 10.1139 17.8125ZM5.84289 13.8542L5.84408 13.8546C6.10335 12.9422 6.94252 12.2708 7.93685 12.2708H8.02749C7.36724 11.6901 6.94727 10.8423 6.94727 9.89583C6.94727 9.62192 6.98566 9.3579 7.05137 9.10417H3.58268C2.81872 9.10417 2.19727 9.72563 2.19727 10.4896V11.4792C2.19727 12.8092 3.76081 13.8542 5.75977 13.8542H5.84289ZM14.385 13.8542L14.3838 13.8546C14.1245 12.9422 13.2853 12.2708 12.291 12.2708H12.2004C12.8606 11.6901 13.2806 10.8423 13.2806 9.89583C13.2806 9.62192 13.2422 9.3579 13.1765 9.10417H16.6452C17.4091 9.10417 18.0306 9.72563 18.0306 10.4896V11.4792C18.0306 12.8092 16.4671 13.8542 14.4681 13.8542H14.385Z" fill="#F59E0B"/>
                        </svg>
                    </div>
                    <h3>Selected Members</h3>
                </div>

                <!-- User Item -->
                <div class="user-item">
                    <div class="avatar">ES</div>
                    <div class="info">
                        <p class="name">Etienne Shey</p>
                        <p class="role">Regional Manager</p>
                    </div>
                    <div class="actions">
                        <button class="icon-btn view">
                            <img src="{{asset('images/profile.png')}}" alt="profile image">
                        </button>
                        <button class="icon-btn delete">
                            <svg width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g opacity="0.7">
                                    <path d="M15.6374 5.08312C15.9115 4.79287 15.9115 4.32262 15.6374 4.03237L14.214 2.52524C13.9399 2.23499 13.4957 2.23499 13.2216 2.52524L9.11362 6.87487L5.00564 2.52524C4.73152 2.23499 4.28739 2.23499 4.01327 2.52524L2.58987 4.03237C2.31575 4.32262 2.31575 4.79287 2.58987 5.08312L6.69785 9.43274L2.58987 13.7824C2.31575 14.0726 2.31575 14.5429 2.58987 14.8331L4.01327 16.3402C4.28739 16.6305 4.73152 16.6305 5.00564 16.3402L15.6374 5.08312Z" fill="url(#paint0_linear_388_15012)"/>
                                    <path d="M9.11377 11.9906L13.2217 16.3402C13.4959 16.6305 13.94 16.6305 14.2141 16.3402L15.6375 14.8331C15.9116 14.5429 15.9116 14.0726 15.6375 13.7824L11.5295 9.43274L9.11377 11.9906Z" fill="url(#paint1_linear_388_15012)"/>
                                </g>
                                <defs>
                                    <linearGradient id="paint0_linear_388_15012" x1="3.28191" y1="3.25799" x2="10.7783" y2="10.3379" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#F44F5A"/>
                                    <stop offset="0.443" stop-color="#EE3D4A"/>
                                    <stop offset="1" stop-color="#E52030"/>
                                    </linearGradient>
                                    <linearGradient id="paint1_linear_388_15012" x1="10.3084" y1="10.6976" x2="15.2256" y2="15.3417" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#A8142E"/>
                                    <stop offset="0.179" stop-color="#BA1632"/>
                                    <stop offset="0.243" stop-color="#C21734"/>
                                    </linearGradient>
                                </defs>
                            </svg>
                        </button>
                    </div>
                </div>

                <div class="user-item">
                    <div class="avatar">JD</div>
                    <div class="info">
                        <p class="name">Jean Dupont</p>
                        <p class="role">Learning & Development</p>
                    </div>
                    <div class="actions">
                        <button class="icon-btn view">
                            <img src="{{asset('images/profile.png')}}" alt="profile image">
                        </button>
                        <button class="icon-btn delete">
                            <svg width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g opacity="0.7">
                                    <path d="M15.6374 5.08312C15.9115 4.79287 15.9115 4.32262 15.6374 4.03237L14.214 2.52524C13.9399 2.23499 13.4957 2.23499 13.2216 2.52524L9.11362 6.87487L5.00564 2.52524C4.73152 2.23499 4.28739 2.23499 4.01327 2.52524L2.58987 4.03237C2.31575 4.32262 2.31575 4.79287 2.58987 5.08312L6.69785 9.43274L2.58987 13.7824C2.31575 14.0726 2.31575 14.5429 2.58987 14.8331L4.01327 16.3402C4.28739 16.6305 4.73152 16.6305 5.00564 16.3402L15.6374 5.08312Z" fill="url(#paint0_linear_388_15012)"/>
                                    <path d="M9.11377 11.9906L13.2217 16.3402C13.4959 16.6305 13.94 16.6305 14.2141 16.3402L15.6375 14.8331C15.9116 14.5429 15.9116 14.0726 15.6375 13.7824L11.5295 9.43274L9.11377 11.9906Z" fill="url(#paint1_linear_388_15012)"/>
                                </g>
                                <defs>
                                    <linearGradient id="paint0_linear_388_15012" x1="3.28191" y1="3.25799" x2="10.7783" y2="10.3379" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#F44F5A"/>
                                    <stop offset="0.443" stop-color="#EE3D4A"/>
                                    <stop offset="1" stop-color="#E52030"/>
                                    </linearGradient>
                                    <linearGradient id="paint1_linear_388_15012" x1="10.3084" y1="10.6976" x2="15.2256" y2="15.3417" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#A8142E"/>
                                    <stop offset="0.179" stop-color="#BA1632"/>
                                    <stop offset="0.243" stop-color="#C21734"/>
                                    </linearGradient>
                                </defs>
                            </svg>
                        </button>
                    </div>
                </div>

                <div class="user-item">
                    <div class="avatar">MC</div>
                    <div class="info">
                        <p class="name">Marie Claire</p>
                        <p class="role">HR Manager</p>
                    </div>
                    <div class="actions">
                        <button class="icon-btn view">
                            <img src="{{asset('images/profile.png')}}" alt="profile image">
                        </button>
                        <button class="icon-btn delete">
                            <svg width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g opacity="0.7">
                                    <path d="M15.6374 5.08312C15.9115 4.79287 15.9115 4.32262 15.6374 4.03237L14.214 2.52524C13.9399 2.23499 13.4957 2.23499 13.2216 2.52524L9.11362 6.87487L5.00564 2.52524C4.73152 2.23499 4.28739 2.23499 4.01327 2.52524L2.58987 4.03237C2.31575 4.32262 2.31575 4.79287 2.58987 5.08312L6.69785 9.43274L2.58987 13.7824C2.31575 14.0726 2.31575 14.5429 2.58987 14.8331L4.01327 16.3402C4.28739 16.6305 4.73152 16.6305 5.00564 16.3402L15.6374 5.08312Z" fill="url(#paint0_linear_388_15012)"/>
                                    <path d="M9.11377 11.9906L13.2217 16.3402C13.4959 16.6305 13.94 16.6305 14.2141 16.3402L15.6375 14.8331C15.9116 14.5429 15.9116 14.0726 15.6375 13.7824L11.5295 9.43274L9.11377 11.9906Z" fill="url(#paint1_linear_388_15012)"/>
                                </g>
                                <defs>
                                    <linearGradient id="paint0_linear_388_15012" x1="3.28191" y1="3.25799" x2="10.7783" y2="10.3379" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#F44F5A"/>
                                    <stop offset="0.443" stop-color="#EE3D4A"/>
                                    <stop offset="1" stop-color="#E52030"/>
                                    </linearGradient>
                                    <linearGradient id="paint1_linear_388_15012" x1="10.3084" y1="10.6976" x2="15.2256" y2="15.3417" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#A8142E"/>
                                    <stop offset="0.179" stop-color="#BA1632"/>
                                    <stop offset="0.243" stop-color="#C21734"/>
                                    </linearGradient>
                                </defs>
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- Quick Add -->
                <div class="quick-add">
                    <label>Quick add (manual)</label>
                    <div class="input-group">
                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12.2045 11.3162L10.3722 9.52481L10.3293 9.4595C10.2494 9.38 10.1403 9.33522 10.0263 9.33522C9.91233 9.33522 9.80315 9.38 9.72329 9.4595C8.16611 10.8881 5.76667 10.9657 4.11627 9.64096C2.46587 8.31617 2.07664 6.00003 3.20671 4.2286C4.33679 2.45717 6.6355 1.78013 8.57836 2.64649C10.5212 3.51285 11.5053 5.65378 10.878 7.64941C10.8329 7.79358 10.8698 7.95037 10.9749 8.0607C11.08 8.17104 11.2373 8.21816 11.3876 8.18433C11.5379 8.15049 11.6583 8.04084 11.7035 7.89667C12.4534 5.52843 11.3208 2.97987 9.03852 1.89964C6.7562 0.819416 4.00904 1.53171 2.57418 3.57575C1.13932 5.61978 1.44738 8.38212 3.29906 10.0758C5.15075 11.7695 7.99037 11.8863 9.98096 10.3505L11.6033 11.9367C11.7709 12.0998 12.0418 12.0998 12.2093 11.9367C12.3767 11.7713 12.3767 11.505 12.2093 11.3396L12.2045 11.3162Z" fill="#667085"/>
                        </svg>
                        <input type="text" id="newUser" placeholder="Full name..">
                    </div>
                    <button class="add-btn" onclick="addUser()">Add +</button>
                    <p class="note">Manual add will create a minimal profile; you can edit it later.</p>
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

        // ============ add staff=========
        function addUser() {
            let input = document.getElementById("newUser");
            let name = input.value.trim();
            if (!name) return;

            // Create initials
            let initials = name.split(" ").map(n => n[0]).join("").toUpperCase();

            // Create new user block
            let userItem = document.createElement("div");
            userItem.className = "user-item";
            userItem.innerHTML = `
                <div class="avatar">${initials}</div>
                <div class="info">
                <p class="name">${name}</p>
                <p class="role">New Member</p>
                </div>
                <div class="actions">
                <button class="icon-btn view">😊</button>
                <button class="icon-btn delete" onclick="this.closest('.user-item').remove()">❌</button>
                </div>
            `;

            // Insert before quick add
            document.querySelector(".quick-add").before(userItem);

            // Reset input
            input.value = "";
        }
    </script>
@endpush
