@extends('layout.admin.app')

{{-- @section('breadcrumb')
@include(
    'layout.admin.content',
    [
        'title' => "Report Dashboard",
        'breadcrumbs' => ['Home', 'Reports'],
        'button' => "New Report",
        'button_onclick' => "goToRoute('/training-session/steps')",
        'end_text' => "Generate and analyze survey reports for clients and training sessions."
    ])
@endsection --}}

@section('content')

    {{-- tab switch --}}
    <div class="tab-header">
        <div class="tabs">
            <div class="tab active" onclick="switchTab(event, 'all')">Survey Analytics</div>
            <div class="tab" onclick="switchTab(event, 'ongoing')">360° Evaluation Reports</div>
            <div class="tab" onclick="switchTab(event, 'completed')">Client Reports</div>
            {{-- <div class="tab" onclick="switchTab(event, 'drafts')">Draft Sessions</div>
            <div class="tab" onclick="switchTab(event, 'question')">Question Templates</div>
            <div class="tab" onclick="switchTab(event, 'questionaire')">Questionnaire Management</div> --}}
        </div>
    </div>

    {{-- all surevrys --}}
    <div id="all" class="content active">
        <div class="section">
            <div class="table-container except">
                <header>
                    <div class="search-input">
                        <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M14.5039 13.8306L12.2123 11.5902L12.1586 11.5085C12.0587 11.409 11.9221 11.353 11.7796 11.353C11.6371 11.353 11.5005 11.409 11.4007 11.5085C9.45315 13.2952 6.45226 13.3923 4.38817 11.7354C2.32407 10.0786 1.83728 7.18185 3.25062 4.96638C4.66396 2.75092 7.53888 1.90417 9.96873 2.98769C12.3986 4.07122 13.6294 6.7488 12.8448 9.24467C12.7883 9.42497 12.8345 9.62105 12.966 9.75905C13.0975 9.89704 13.2942 9.95598 13.4822 9.91366C13.6702 9.87135 13.8208 9.7342 13.8773 9.5539C14.8151 6.59203 13.3987 3.40464 10.5442 2.05364C7.68982 0.702644 4.25406 1.59349 2.45953 4.14988C0.66501 6.70628 1.05028 10.161 3.36612 12.2793C5.68195 14.3975 9.23335 14.5435 11.7229 12.6229L13.7519 14.6066C13.9615 14.8106 14.3003 14.8106 14.5098 14.6066C14.7192 14.3997 14.7192 14.0667 14.5098 13.8598L14.5039 13.8306Z" fill="#667085"/>
                        </svg>
                        <input type="text" placeholder="Search sessions, clients, manager...">
                    </div>

                    <div class="action-btns">
                        <div class="btn">
                            <div class="icon">
                                <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2.60449 3.08453C2.60449 2.66975 2.94074 2.3335 3.35552 2.3335H15.372C15.7868 2.3335 16.1231 2.66974 16.1231 3.08453V5.02654C16.1231 5.22572 16.044 5.41675 15.9031 5.5576L11.0858 10.3749C10.945 10.5157 10.8659 10.7068 10.8659 10.9059V12.848L7.86172 15.8521V10.9059C7.86172 10.7068 7.78259 10.5157 7.64175 10.3749L2.82446 5.5576C2.68362 5.41675 2.60449 5.22572 2.60449 5.02654V3.08453Z" stroke="#202020" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                Status:
                            </div>
                            <select name="" id="">
                                <option value="">ALl</option>
                                <option value="">Ongoing</option>
                                <option value="">Completed</option>
                                <option value="">Draft</option>
                            </select>
                        </div>

                        <div class="btn">
                            <div class="icon">
                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4.79642 9.09283H13.3317M2.6626 4.8252H15.4655M6.93024 13.3605H11.1979" stroke="#344054" stroke-width="1.42539" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                Sort By:
                            </div>
                            <select name="" id="">
                                <option value="">Newest</option>
                                <option value="">Oldest</option>
                            </select>
                        </div>

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
                                <p>
                                    CLIENT
                                    <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6.56994 2.81934V10.26M6.56994 10.26L10.2903 6.53966M6.56994 10.26L2.84961 6.53966" stroke="#667085" stroke-width="1.06295" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </p>
                            </th>

                            <th>
                                <p>
                                    SESSION
                                    <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6.56994 2.81934V10.26M6.56994 10.26L10.2903 6.53966M6.56994 10.26L2.84961 6.53966" stroke="#667085" stroke-width="1.06295" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </p>
                            </th>

                            <th>
                                <p>
                                    TYPE
                                    <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6.56994 2.81934V10.26M6.56994 10.26L10.2903 6.53966M6.56994 10.26L2.84961 6.53966" stroke="#667085" stroke-width="1.06295" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </p>
                            </th>

                            <th>
                                <p>
                                    MANAGER
                                    <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6.56994 2.81934V10.26M6.56994 10.26L10.2903 6.53966M6.56994 10.26L2.84961 6.53966" stroke="#667085" stroke-width="1.06295" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </p>
                            </th>

                            <th>
                                <p>
                                    STATUS
                                    <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6.56994 2.81934V10.26M6.56994 10.26L10.2903 6.53966M6.56994 10.26L2.84961 6.53966" stroke="#667085" stroke-width="1.06295" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </p>
                            </th>

                            <th>
                                <p>
                                    PROGRESS
                                    <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6.56994 2.81934V10.26M6.56994 10.26L10.2903 6.53966M6.56994 10.26L2.84961 6.53966" stroke="#667085" stroke-width="1.06295" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </p>
                            </th>

                            <th>
                                <p>
                                    CREATED
                                    <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6.56994 2.81934V10.26M6.56994 10.26L10.2903 6.53966M6.56994 10.26L2.84961 6.53966" stroke="#667085" stroke-width="1.06295" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </p>
                            </th>

                            <th>
                                <p>
                                    ACTIONS
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
                                <div class="content">
                                    <div class="profile">
                                        <img src="{{asset('images/mtn.png')}}" alt="">
                                    </div>
                                    <div class="info">
                                        <p>MTN Cameroon</p>
                                        <span>Telecommunications</span>
                                    </div>
                                </div>
                            </td>

                            <td>
                                <div class="content">
                                    <div class="survey">
                                        <svg width="19" height="20" viewBox="0 0 19 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9.49996 1.46686C9.34905 1.46686 9.19807 1.52429 9.08248 1.63849L8.10836 2.60179L6.78325 2.25389C6.46777 2.17037 6.14551 2.35824 6.05961 2.67214L5.70012 3.99339L4.37887 4.35366C4.06458 4.43916 3.87828 4.76221 3.96062 5.07729L4.30774 6.4024L3.34445 7.37575C3.11565 7.60692 3.11565 7.97955 3.34445 8.21071L4.30774 9.18483L3.95984 10.5099C3.87711 10.825 4.0638 11.1477 4.3781 11.2336L5.69934 11.5939L6.05961 12.9151C6.14551 13.229 6.46777 13.4169 6.78325 13.3326L8.10836 12.9855L9.08248 13.9488C9.19807 14.0631 9.34992 14.1196 9.50074 14.1196C9.65155 14.1196 9.80263 14.0628 9.91822 13.9488L10.8923 12.9855L12.2167 13.3334C12.5333 13.4173 12.8544 13.229 12.9403 12.9151L13.2998 11.5939L14.6211 11.2336C14.9353 11.1481 15.1216 10.825 15.0393 10.5099L14.6922 9.18483L15.6555 8.21071C15.8843 7.97955 15.8843 7.60732 15.6555 7.37575L14.6922 6.4024L15.0401 5.07729C15.1228 4.76221 14.9361 4.43955 14.6218 4.35366L13.3006 3.99339L12.9403 2.67214C12.8544 2.35824 12.5333 2.17037 12.2167 2.25389L10.8916 2.60179L9.91744 1.63849C9.80186 1.52429 9.65087 1.46686 9.49996 1.46686ZM7.87179 13.866L6.22506 14.2982C6.12689 14.3239 6.02892 14.3211 5.93669 14.299V18.2813C5.93669 18.5002 6.05703 18.7018 6.2498 18.8047C6.44257 18.9084 6.6777 18.8968 6.85979 18.7753L9.38941 17.0884C9.4567 17.0444 9.54247 17.044 9.60897 17.0884L12.1394 18.7745C12.2391 18.8414 12.3535 18.875 12.4687 18.875C12.5649 18.875 12.6607 18.8518 12.7486 18.8047C12.9414 18.7018 13.0625 18.5002 13.0625 18.2813V14.299C12.9706 14.3207 12.8723 14.3239 12.7741 14.2982L11.1274 13.866L9.91744 15.062C9.80186 15.1764 9.65 15.2337 9.49919 15.2337C9.34838 15.2337 9.19729 15.176 9.08171 15.062L7.87179 13.866Z" fill="#F59E0B"/>
                                        </svg>
                                    </div>
                                    <div class="info">
                                        <p>Q1 2025 Leadership - Eneo Cameroon</p>
                                        <span>Regional leadership 360° evaluation for first quarter.</span>
                                    </div>
                                </div>
                            </td>

                            <td>
                                <div class="town">
                                    360°
                                </div>
                            </td>

                            <td>3</td>

                            <td>
                                <div class="status ongoing">
                                    Ongoing
                                </div>
                            </td>

                            <td>
                                <div class="progress-container">
                                    <div class="progress-bar">
                                        <div class="progress-fill" style="width: 65%;"></div>
                                    </div>
                                    <span>78/120</span>
                                </div>
                            </td>

                            <td>
                                15 Jun 2025
                            </td>

                            <td>
                                <div class="actions">
                                    <button class="view-btn" onclick="viewCLientDetails()">
                                        View
                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8.35826 3.16602L12.168 6.97572M12.168 6.97572L8.35826 10.7854M12.168 6.97572L2.37158 6.97572" stroke="white" stroke-width="0.653092" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </button>
                                    <button class="edit-btn" onclick="editCLientModal()">
                                        Edit
                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M6.91127 3.16564H4.19005C3.58889 3.16564 3.10156 3.65297 3.10156 4.25412V10.2408C3.10156 10.842 3.58889 11.3293 4.19005 11.3293H10.1767C10.7779 11.3293 11.2652 10.842 11.2652 10.2408V7.51959M10.4955 2.39596C10.9206 1.97088 11.6098 1.97088 12.0349 2.39596C12.46 2.82104 12.46 3.51023 12.0349 3.93531L7.36213 8.60807H5.82278L5.82278 7.06872L10.4955 2.39596Z" stroke="#137699" stroke-width="0.653092" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </button>
                                    <button class="delete-btn" onclick="deleteClientModal()">
                                        Delete
                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M10.608 4.09983L10.136 10.7083C10.0953 11.2779 9.6213 11.7192 9.05023 11.7192H4.54633C3.97527 11.7192 3.5013 11.2779 3.46061 10.7083L2.98858 4.09983M5.7098 6.2768V9.54226M7.88677 6.2768V9.54226M8.43102 4.09983V2.4671C8.43102 2.16652 8.18735 1.92285 7.88677 1.92285H5.7098C5.40922 1.92285 5.16555 2.16652 5.16555 2.4671V4.09983M2.44434 4.09983H11.1522" stroke="#FF383C" stroke-width="0.653092" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <div class="content">
                                    <div class="profile">
                                        <img src="{{asset('images/eneo.png')}}" alt="">
                                    </div>
                                    <div class="info">
                                        <p>Eneo Cameroon S.A.</p>
                                        <span>Energy</span>
                                    </div>
                                </div>
                            </td>

                             <td>
                                <div class="content">
                                    <div class="survey">
                                        <svg width="19" height="20" viewBox="0 0 19 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9.49996 1.46686C9.34905 1.46686 9.19807 1.52429 9.08248 1.63849L8.10836 2.60179L6.78325 2.25389C6.46777 2.17037 6.14551 2.35824 6.05961 2.67214L5.70012 3.99339L4.37887 4.35366C4.06458 4.43916 3.87828 4.76221 3.96062 5.07729L4.30774 6.4024L3.34445 7.37575C3.11565 7.60692 3.11565 7.97955 3.34445 8.21071L4.30774 9.18483L3.95984 10.5099C3.87711 10.825 4.0638 11.1477 4.3781 11.2336L5.69934 11.5939L6.05961 12.9151C6.14551 13.229 6.46777 13.4169 6.78325 13.3326L8.10836 12.9855L9.08248 13.9488C9.19807 14.0631 9.34992 14.1196 9.50074 14.1196C9.65155 14.1196 9.80263 14.0628 9.91822 13.9488L10.8923 12.9855L12.2167 13.3334C12.5333 13.4173 12.8544 13.229 12.9403 12.9151L13.2998 11.5939L14.6211 11.2336C14.9353 11.1481 15.1216 10.825 15.0393 10.5099L14.6922 9.18483L15.6555 8.21071C15.8843 7.97955 15.8843 7.60732 15.6555 7.37575L14.6922 6.4024L15.0401 5.07729C15.1228 4.76221 14.9361 4.43955 14.6218 4.35366L13.3006 3.99339L12.9403 2.67214C12.8544 2.35824 12.5333 2.17037 12.2167 2.25389L10.8916 2.60179L9.91744 1.63849C9.80186 1.52429 9.65087 1.46686 9.49996 1.46686ZM7.87179 13.866L6.22506 14.2982C6.12689 14.3239 6.02892 14.3211 5.93669 14.299V18.2813C5.93669 18.5002 6.05703 18.7018 6.2498 18.8047C6.44257 18.9084 6.6777 18.8968 6.85979 18.7753L9.38941 17.0884C9.4567 17.0444 9.54247 17.044 9.60897 17.0884L12.1394 18.7745C12.2391 18.8414 12.3535 18.875 12.4687 18.875C12.5649 18.875 12.6607 18.8518 12.7486 18.8047C12.9414 18.7018 13.0625 18.5002 13.0625 18.2813V14.299C12.9706 14.3207 12.8723 14.3239 12.7741 14.2982L11.1274 13.866L9.91744 15.062C9.80186 15.1764 9.65 15.2337 9.49919 15.2337C9.34838 15.2337 9.19729 15.176 9.08171 15.062L7.87179 13.866Z" fill="#F59E0B"/>
                                        </svg>
                                    </div>
                                    <div class="info">
                                        <p>Q1 2025 Leadership - Eneo Cameroon</p>
                                        <span>Regional leadership 360° evaluation for first quarter.</span>
                                    </div>
                                </div>
                            </td>

                            <td>
                                <div class="town">
                                    360°
                                </div>
                            </td>

                            <td>3</td>

                            <td>
                                <div class="status complete">
                                    Completed
                                </div>
                            </td>

                            <td>
                                <div class="progress-container">
                                    <div class="progress-bar">
                                        <div class="progress-fill" style="width: 65%;"></div>
                                    </div>
                                    <span>78/120</span>
                                </div>
                            </td>

                            <td>
                                15 Jun 2025
                            </td>

                            <td>
                                <div class="actions">
                                    <button class="view-btn">
                                        View
                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8.35826 3.16602L12.168 6.97572M12.168 6.97572L8.35826 10.7854M12.168 6.97572L2.37158 6.97572" stroke="white" stroke-width="0.653092" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </button>
                                    <button class="edit-btn">
                                        Edit
                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M6.91127 3.16564H4.19005C3.58889 3.16564 3.10156 3.65297 3.10156 4.25412V10.2408C3.10156 10.842 3.58889 11.3293 4.19005 11.3293H10.1767C10.7779 11.3293 11.2652 10.842 11.2652 10.2408V7.51959M10.4955 2.39596C10.9206 1.97088 11.6098 1.97088 12.0349 2.39596C12.46 2.82104 12.46 3.51023 12.0349 3.93531L7.36213 8.60807H5.82278L5.82278 7.06872L10.4955 2.39596Z" stroke="#137699" stroke-width="0.653092" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </button>
                                    <button class="delete-btn" >
                                        Delete
                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M10.608 4.09983L10.136 10.7083C10.0953 11.2779 9.6213 11.7192 9.05023 11.7192H4.54633C3.97527 11.7192 3.5013 11.2779 3.46061 10.7083L2.98858 4.09983M5.7098 6.2768V9.54226M7.88677 6.2768V9.54226M8.43102 4.09983V2.4671C8.43102 2.16652 8.18735 1.92285 7.88677 1.92285H5.7098C5.40922 1.92285 5.16555 2.16652 5.16555 2.4671V4.09983M2.44434 4.09983H11.1522" stroke="#FF383C" stroke-width="0.653092" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <div class="content">
                                    <div class="profile">
                                        <img src="{{asset('images/orange.png')}}" alt="">
                                    </div>
                                    <div class="info">
                                        <p>Orange Cameroon</p>
                                        <span>Telecommunications</span>
                                    </div>
                                </div>
                            </td>

                            <td>
                                <div class="content">
                                    <div class="survey">
                                        <svg width="19" height="20" viewBox="0 0 19 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9.49996 1.46686C9.34905 1.46686 9.19807 1.52429 9.08248 1.63849L8.10836 2.60179L6.78325 2.25389C6.46777 2.17037 6.14551 2.35824 6.05961 2.67214L5.70012 3.99339L4.37887 4.35366C4.06458 4.43916 3.87828 4.76221 3.96062 5.07729L4.30774 6.4024L3.34445 7.37575C3.11565 7.60692 3.11565 7.97955 3.34445 8.21071L4.30774 9.18483L3.95984 10.5099C3.87711 10.825 4.0638 11.1477 4.3781 11.2336L5.69934 11.5939L6.05961 12.9151C6.14551 13.229 6.46777 13.4169 6.78325 13.3326L8.10836 12.9855L9.08248 13.9488C9.19807 14.0631 9.34992 14.1196 9.50074 14.1196C9.65155 14.1196 9.80263 14.0628 9.91822 13.9488L10.8923 12.9855L12.2167 13.3334C12.5333 13.4173 12.8544 13.229 12.9403 12.9151L13.2998 11.5939L14.6211 11.2336C14.9353 11.1481 15.1216 10.825 15.0393 10.5099L14.6922 9.18483L15.6555 8.21071C15.8843 7.97955 15.8843 7.60732 15.6555 7.37575L14.6922 6.4024L15.0401 5.07729C15.1228 4.76221 14.9361 4.43955 14.6218 4.35366L13.3006 3.99339L12.9403 2.67214C12.8544 2.35824 12.5333 2.17037 12.2167 2.25389L10.8916 2.60179L9.91744 1.63849C9.80186 1.52429 9.65087 1.46686 9.49996 1.46686ZM7.87179 13.866L6.22506 14.2982C6.12689 14.3239 6.02892 14.3211 5.93669 14.299V18.2813C5.93669 18.5002 6.05703 18.7018 6.2498 18.8047C6.44257 18.9084 6.6777 18.8968 6.85979 18.7753L9.38941 17.0884C9.4567 17.0444 9.54247 17.044 9.60897 17.0884L12.1394 18.7745C12.2391 18.8414 12.3535 18.875 12.4687 18.875C12.5649 18.875 12.6607 18.8518 12.7486 18.8047C12.9414 18.7018 13.0625 18.5002 13.0625 18.2813V14.299C12.9706 14.3207 12.8723 14.3239 12.7741 14.2982L11.1274 13.866L9.91744 15.062C9.80186 15.1764 9.65 15.2337 9.49919 15.2337C9.34838 15.2337 9.19729 15.176 9.08171 15.062L7.87179 13.866Z" fill="#F59E0B"/>
                                        </svg>
                                    </div>
                                    <div class="info">
                                        <p>Q1 2025 Leadership - Eneo Cameroon</p>
                                        <span>Regional leadership 360° evaluation for first quarter.</span>
                                    </div>
                                </div>
                            </td>

                            <td>
                                <div class="town">
                                    360°
                                </div>
                            </td>

                            <td>3</td>

                            <td>
                                <div class="status ongoing">
                                    Ongoing
                                </div>
                            </td>

                            <td>
                                <div class="progress-container">
                                    <div class="progress-bar">
                                        <div class="progress-fill" style="width: 65%;"></div>
                                    </div>
                                    <span>78/120</span>
                                </div>
                            </td>

                            <td>
                                15 Jun 2025
                            </td>

                            <td>
                                <div class="actions">
                                    <button class="view-btn">
                                        View
                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8.35826 3.16602L12.168 6.97572M12.168 6.97572L8.35826 10.7854M12.168 6.97572L2.37158 6.97572" stroke="white" stroke-width="0.653092" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </button>
                                    <button class="edit-btn" >
                                        Edit
                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M6.91127 3.16564H4.19005C3.58889 3.16564 3.10156 3.65297 3.10156 4.25412V10.2408C3.10156 10.842 3.58889 11.3293 4.19005 11.3293H10.1767C10.7779 11.3293 11.2652 10.842 11.2652 10.2408V7.51959M10.4955 2.39596C10.9206 1.97088 11.6098 1.97088 12.0349 2.39596C12.46 2.82104 12.46 3.51023 12.0349 3.93531L7.36213 8.60807H5.82278L5.82278 7.06872L10.4955 2.39596Z" stroke="#137699" stroke-width="0.653092" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </button>
                                    <button class="delete-btn" >
                                        Delete
                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M10.608 4.09983L10.136 10.7083C10.0953 11.2779 9.6213 11.7192 9.05023 11.7192H4.54633C3.97527 11.7192 3.5013 11.2779 3.46061 10.7083L2.98858 4.09983M5.7098 6.2768V9.54226M7.88677 6.2768V9.54226M8.43102 4.09983V2.4671C8.43102 2.16652 8.18735 1.92285 7.88677 1.92285H5.7098C5.40922 1.92285 5.16555 2.16652 5.16555 2.4671V4.09983M2.44434 4.09983H11.1522" stroke="#FF383C" stroke-width="0.653092" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <div class="content">
                                    <div class="profile">
                                        <img src="{{asset('images/mtn.png')}}" alt="">
                                    </div>
                                    <div class="info">
                                        <p>MTN Cameroon</p>
                                        <span>Telecommunications</span>
                                    </div>
                                </div>
                            </td>

                             <td>
                                <div class="content">
                                    <div class="survey">
                                        <svg width="19" height="20" viewBox="0 0 19 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9.49996 1.46686C9.34905 1.46686 9.19807 1.52429 9.08248 1.63849L8.10836 2.60179L6.78325 2.25389C6.46777 2.17037 6.14551 2.35824 6.05961 2.67214L5.70012 3.99339L4.37887 4.35366C4.06458 4.43916 3.87828 4.76221 3.96062 5.07729L4.30774 6.4024L3.34445 7.37575C3.11565 7.60692 3.11565 7.97955 3.34445 8.21071L4.30774 9.18483L3.95984 10.5099C3.87711 10.825 4.0638 11.1477 4.3781 11.2336L5.69934 11.5939L6.05961 12.9151C6.14551 13.229 6.46777 13.4169 6.78325 13.3326L8.10836 12.9855L9.08248 13.9488C9.19807 14.0631 9.34992 14.1196 9.50074 14.1196C9.65155 14.1196 9.80263 14.0628 9.91822 13.9488L10.8923 12.9855L12.2167 13.3334C12.5333 13.4173 12.8544 13.229 12.9403 12.9151L13.2998 11.5939L14.6211 11.2336C14.9353 11.1481 15.1216 10.825 15.0393 10.5099L14.6922 9.18483L15.6555 8.21071C15.8843 7.97955 15.8843 7.60732 15.6555 7.37575L14.6922 6.4024L15.0401 5.07729C15.1228 4.76221 14.9361 4.43955 14.6218 4.35366L13.3006 3.99339L12.9403 2.67214C12.8544 2.35824 12.5333 2.17037 12.2167 2.25389L10.8916 2.60179L9.91744 1.63849C9.80186 1.52429 9.65087 1.46686 9.49996 1.46686ZM7.87179 13.866L6.22506 14.2982C6.12689 14.3239 6.02892 14.3211 5.93669 14.299V18.2813C5.93669 18.5002 6.05703 18.7018 6.2498 18.8047C6.44257 18.9084 6.6777 18.8968 6.85979 18.7753L9.38941 17.0884C9.4567 17.0444 9.54247 17.044 9.60897 17.0884L12.1394 18.7745C12.2391 18.8414 12.3535 18.875 12.4687 18.875C12.5649 18.875 12.6607 18.8518 12.7486 18.8047C12.9414 18.7018 13.0625 18.5002 13.0625 18.2813V14.299C12.9706 14.3207 12.8723 14.3239 12.7741 14.2982L11.1274 13.866L9.91744 15.062C9.80186 15.1764 9.65 15.2337 9.49919 15.2337C9.34838 15.2337 9.19729 15.176 9.08171 15.062L7.87179 13.866Z" fill="#F59E0B"/>
                                        </svg>
                                    </div>
                                    <div class="info">
                                        <p>Q1 2025 Leadership - Eneo Cameroon</p>
                                        <span>Regional leadership 360° evaluation for first quarter.</span>
                                    </div>
                                </div>
                            </td>

                            <td>
                                <div class="town">
                                    360°
                                </div>
                            </td>

                            <td>3</td>

                            <td>
                                <div class="status ongoing">
                                    Ongoing
                                </div>
                            </td>

                            <td>
                                <div class="progress-container">
                                    <div class="progress-bar">
                                        <div class="progress-fill" style="width: 65%;"></div>
                                    </div>
                                    <span>78/120</span>
                                </div>
                            </td>

                            <td>
                                15 Jun 2025
                            </td>

                            <td>
                                <div class="actions">
                                    <button class="view-btn">
                                        View
                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8.35826 3.16602L12.168 6.97572M12.168 6.97572L8.35826 10.7854M12.168 6.97572L2.37158 6.97572" stroke="white" stroke-width="0.653092" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </button>
                                    <button class="edit-btn">
                                        Edit
                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M6.91127 3.16564H4.19005C3.58889 3.16564 3.10156 3.65297 3.10156 4.25412V10.2408C3.10156 10.842 3.58889 11.3293 4.19005 11.3293H10.1767C10.7779 11.3293 11.2652 10.842 11.2652 10.2408V7.51959M10.4955 2.39596C10.9206 1.97088 11.6098 1.97088 12.0349 2.39596C12.46 2.82104 12.46 3.51023 12.0349 3.93531L7.36213 8.60807H5.82278L5.82278 7.06872L10.4955 2.39596Z" stroke="#137699" stroke-width="0.653092" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </button>
                                    <button class="delete-btn" >
                                        Delete
                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M10.608 4.09983L10.136 10.7083C10.0953 11.2779 9.6213 11.7192 9.05023 11.7192H4.54633C3.97527 11.7192 3.5013 11.2779 3.46061 10.7083L2.98858 4.09983M5.7098 6.2768V9.54226M7.88677 6.2768V9.54226M8.43102 4.09983V2.4671C8.43102 2.16652 8.18735 1.92285 7.88677 1.92285H5.7098C5.40922 1.92285 5.16555 2.16652 5.16555 2.4671V4.09983M2.44434 4.09983H11.1522" stroke="#FF383C" stroke-width="0.653092" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <div class="content">
                                    <div class="profile">
                                        <img src="{{asset('images/mtn.png')}}" alt="">
                                    </div>
                                    <div class="info">
                                        <p>MTN Cameroon</p>
                                        <span>Telecommunications</span>
                                    </div>
                                </div>
                            </td>

                             <td>
                                <div class="content">
                                    <div class="survey">
                                        <svg width="19" height="20" viewBox="0 0 19 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9.49996 1.46686C9.34905 1.46686 9.19807 1.52429 9.08248 1.63849L8.10836 2.60179L6.78325 2.25389C6.46777 2.17037 6.14551 2.35824 6.05961 2.67214L5.70012 3.99339L4.37887 4.35366C4.06458 4.43916 3.87828 4.76221 3.96062 5.07729L4.30774 6.4024L3.34445 7.37575C3.11565 7.60692 3.11565 7.97955 3.34445 8.21071L4.30774 9.18483L3.95984 10.5099C3.87711 10.825 4.0638 11.1477 4.3781 11.2336L5.69934 11.5939L6.05961 12.9151C6.14551 13.229 6.46777 13.4169 6.78325 13.3326L8.10836 12.9855L9.08248 13.9488C9.19807 14.0631 9.34992 14.1196 9.50074 14.1196C9.65155 14.1196 9.80263 14.0628 9.91822 13.9488L10.8923 12.9855L12.2167 13.3334C12.5333 13.4173 12.8544 13.229 12.9403 12.9151L13.2998 11.5939L14.6211 11.2336C14.9353 11.1481 15.1216 10.825 15.0393 10.5099L14.6922 9.18483L15.6555 8.21071C15.8843 7.97955 15.8843 7.60732 15.6555 7.37575L14.6922 6.4024L15.0401 5.07729C15.1228 4.76221 14.9361 4.43955 14.6218 4.35366L13.3006 3.99339L12.9403 2.67214C12.8544 2.35824 12.5333 2.17037 12.2167 2.25389L10.8916 2.60179L9.91744 1.63849C9.80186 1.52429 9.65087 1.46686 9.49996 1.46686ZM7.87179 13.866L6.22506 14.2982C6.12689 14.3239 6.02892 14.3211 5.93669 14.299V18.2813C5.93669 18.5002 6.05703 18.7018 6.2498 18.8047C6.44257 18.9084 6.6777 18.8968 6.85979 18.7753L9.38941 17.0884C9.4567 17.0444 9.54247 17.044 9.60897 17.0884L12.1394 18.7745C12.2391 18.8414 12.3535 18.875 12.4687 18.875C12.5649 18.875 12.6607 18.8518 12.7486 18.8047C12.9414 18.7018 13.0625 18.5002 13.0625 18.2813V14.299C12.9706 14.3207 12.8723 14.3239 12.7741 14.2982L11.1274 13.866L9.91744 15.062C9.80186 15.1764 9.65 15.2337 9.49919 15.2337C9.34838 15.2337 9.19729 15.176 9.08171 15.062L7.87179 13.866Z" fill="#F59E0B"/>
                                        </svg>
                                    </div>
                                    <div class="info">
                                        <p>Q1 2025 Leadership - Eneo Cameroon</p>
                                        <span>Regional leadership 360° evaluation for first quarter.</span>
                                    </div>
                                </div>
                            </td>

                            <td>
                                <div class="town">
                                    360°
                                </div>
                            </td>

                            <td>3</td>

                            <td>
                                <div class="status draft">
                                    Draft
                                </div>
                            </td>

                            <td>
                                <div class="progress-container">
                                    <div class="progress-bar">
                                        <div class="progress-fill" style="width: 65%;"></div>
                                    </div>
                                    <span>78/120</span>
                                </div>
                            </td>

                            <td>
                                15 Jun 2025
                            </td>

                            <td>
                                <div class="actions">
                                    <button class="view-btn">
                                        View
                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8.35826 3.16602L12.168 6.97572M12.168 6.97572L8.35826 10.7854M12.168 6.97572L2.37158 6.97572" stroke="white" stroke-width="0.653092" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </button>
                                    <button class="edit-btn">
                                        Edit
                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M6.91127 3.16564H4.19005C3.58889 3.16564 3.10156 3.65297 3.10156 4.25412V10.2408C3.10156 10.842 3.58889 11.3293 4.19005 11.3293H10.1767C10.7779 11.3293 11.2652 10.842 11.2652 10.2408V7.51959M10.4955 2.39596C10.9206 1.97088 11.6098 1.97088 12.0349 2.39596C12.46 2.82104 12.46 3.51023 12.0349 3.93531L7.36213 8.60807H5.82278L5.82278 7.06872L10.4955 2.39596Z" stroke="#137699" stroke-width="0.653092" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </button>
                                    <button class="delete-btn" >
                                        Delete
                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M10.608 4.09983L10.136 10.7083C10.0953 11.2779 9.6213 11.7192 9.05023 11.7192H4.54633C3.97527 11.7192 3.5013 11.2779 3.46061 10.7083L2.98858 4.09983M5.7098 6.2768V9.54226M7.88677 6.2768V9.54226M8.43102 4.09983V2.4671C8.43102 2.16652 8.18735 1.92285 7.88677 1.92285H5.7098C5.40922 1.92285 5.16555 2.16652 5.16555 2.4671V4.09983M2.44434 4.09983H11.1522" stroke="#FF383C" stroke-width="0.653092" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </button>
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
    </div>

    {{-- on-going surveys --}}
    <div id="ongoing" class="content">
        <div class="section">
            <div class="table-container except">
                <header>
                    <div class="search-input">
                        <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M14.5039 13.8306L12.2123 11.5902L12.1586 11.5085C12.0587 11.409 11.9221 11.353 11.7796 11.353C11.6371 11.353 11.5005 11.409 11.4007 11.5085C9.45315 13.2952 6.45226 13.3923 4.38817 11.7354C2.32407 10.0786 1.83728 7.18185 3.25062 4.96638C4.66396 2.75092 7.53888 1.90417 9.96873 2.98769C12.3986 4.07122 13.6294 6.7488 12.8448 9.24467C12.7883 9.42497 12.8345 9.62105 12.966 9.75905C13.0975 9.89704 13.2942 9.95598 13.4822 9.91366C13.6702 9.87135 13.8208 9.7342 13.8773 9.5539C14.8151 6.59203 13.3987 3.40464 10.5442 2.05364C7.68982 0.702644 4.25406 1.59349 2.45953 4.14988C0.66501 6.70628 1.05028 10.161 3.36612 12.2793C5.68195 14.3975 9.23335 14.5435 11.7229 12.6229L13.7519 14.6066C13.9615 14.8106 14.3003 14.8106 14.5098 14.6066C14.7192 14.3997 14.7192 14.0667 14.5098 13.8598L14.5039 13.8306Z" fill="#667085"/>
                        </svg>
                        <input type="text" placeholder="Search sessions, clients, manager...">
                    </div>

                    <div class="action-btns">
                        <div class="btn">
                            <div class="icon">
                                <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2.60449 3.08453C2.60449 2.66975 2.94074 2.3335 3.35552 2.3335H15.372C15.7868 2.3335 16.1231 2.66974 16.1231 3.08453V5.02654C16.1231 5.22572 16.044 5.41675 15.9031 5.5576L11.0858 10.3749C10.945 10.5157 10.8659 10.7068 10.8659 10.9059V12.848L7.86172 15.8521V10.9059C7.86172 10.7068 7.78259 10.5157 7.64175 10.3749L2.82446 5.5576C2.68362 5.41675 2.60449 5.22572 2.60449 5.02654V3.08453Z" stroke="#202020" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                Status:
                            </div>
                            <select name="" id="">
                                <option value="">ALl</option>
                                <option value="">Ongoing</option>
                                <option value="">Completed</option>
                                <option value="">Draft</option>
                            </select>
                        </div>

                        <div class="btn">
                            <div class="icon">
                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4.79642 9.09283H13.3317M2.6626 4.8252H15.4655M6.93024 13.3605H11.1979" stroke="#344054" stroke-width="1.42539" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                Sort By:
                            </div>
                            <select name="" id="">
                                <option value="">Newest</option>
                                <option value="">Oldest</option>
                            </select>
                        </div>

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
                                <p>
                                    CLIENT
                                    <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6.56994 2.81934V10.26M6.56994 10.26L10.2903 6.53966M6.56994 10.26L2.84961 6.53966" stroke="#667085" stroke-width="1.06295" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </p>
                            </th>

                            <th>
                                <p>
                                    SESSION
                                    <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6.56994 2.81934V10.26M6.56994 10.26L10.2903 6.53966M6.56994 10.26L2.84961 6.53966" stroke="#667085" stroke-width="1.06295" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </p>
                            </th>

                            <th>
                                <p>
                                    TYPE
                                    <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6.56994 2.81934V10.26M6.56994 10.26L10.2903 6.53966M6.56994 10.26L2.84961 6.53966" stroke="#667085" stroke-width="1.06295" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </p>
                            </th>

                            <th>
                                <p>
                                    MANAGER
                                    <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6.56994 2.81934V10.26M6.56994 10.26L10.2903 6.53966M6.56994 10.26L2.84961 6.53966" stroke="#667085" stroke-width="1.06295" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </p>
                            </th>

                            <th>
                                <p>
                                    STATUS
                                    <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6.56994 2.81934V10.26M6.56994 10.26L10.2903 6.53966M6.56994 10.26L2.84961 6.53966" stroke="#667085" stroke-width="1.06295" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </p>
                            </th>

                            <th>
                                <p>
                                    PROGRESS
                                    <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6.56994 2.81934V10.26M6.56994 10.26L10.2903 6.53966M6.56994 10.26L2.84961 6.53966" stroke="#667085" stroke-width="1.06295" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </p>
                            </th>

                            <th>
                                <p>
                                    CREATED
                                    <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6.56994 2.81934V10.26M6.56994 10.26L10.2903 6.53966M6.56994 10.26L2.84961 6.53966" stroke="#667085" stroke-width="1.06295" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </p>
                            </th>

                            <th>
                                <p>
                                    ACTIONS
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
                                <div class="content">
                                    <div class="profile">
                                        <img src="{{asset('images/mtn.png')}}" alt="">
                                    </div>
                                    <div class="info">
                                        <p>MTN Cameroon</p>
                                        <span>Telecommunications</span>
                                    </div>
                                </div>
                            </td>

                             <td>
                                <div class="content">
                                    <div class="survey">
                                        <svg width="19" height="20" viewBox="0 0 19 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9.49996 1.46686C9.34905 1.46686 9.19807 1.52429 9.08248 1.63849L8.10836 2.60179L6.78325 2.25389C6.46777 2.17037 6.14551 2.35824 6.05961 2.67214L5.70012 3.99339L4.37887 4.35366C4.06458 4.43916 3.87828 4.76221 3.96062 5.07729L4.30774 6.4024L3.34445 7.37575C3.11565 7.60692 3.11565 7.97955 3.34445 8.21071L4.30774 9.18483L3.95984 10.5099C3.87711 10.825 4.0638 11.1477 4.3781 11.2336L5.69934 11.5939L6.05961 12.9151C6.14551 13.229 6.46777 13.4169 6.78325 13.3326L8.10836 12.9855L9.08248 13.9488C9.19807 14.0631 9.34992 14.1196 9.50074 14.1196C9.65155 14.1196 9.80263 14.0628 9.91822 13.9488L10.8923 12.9855L12.2167 13.3334C12.5333 13.4173 12.8544 13.229 12.9403 12.9151L13.2998 11.5939L14.6211 11.2336C14.9353 11.1481 15.1216 10.825 15.0393 10.5099L14.6922 9.18483L15.6555 8.21071C15.8843 7.97955 15.8843 7.60732 15.6555 7.37575L14.6922 6.4024L15.0401 5.07729C15.1228 4.76221 14.9361 4.43955 14.6218 4.35366L13.3006 3.99339L12.9403 2.67214C12.8544 2.35824 12.5333 2.17037 12.2167 2.25389L10.8916 2.60179L9.91744 1.63849C9.80186 1.52429 9.65087 1.46686 9.49996 1.46686ZM7.87179 13.866L6.22506 14.2982C6.12689 14.3239 6.02892 14.3211 5.93669 14.299V18.2813C5.93669 18.5002 6.05703 18.7018 6.2498 18.8047C6.44257 18.9084 6.6777 18.8968 6.85979 18.7753L9.38941 17.0884C9.4567 17.0444 9.54247 17.044 9.60897 17.0884L12.1394 18.7745C12.2391 18.8414 12.3535 18.875 12.4687 18.875C12.5649 18.875 12.6607 18.8518 12.7486 18.8047C12.9414 18.7018 13.0625 18.5002 13.0625 18.2813V14.299C12.9706 14.3207 12.8723 14.3239 12.7741 14.2982L11.1274 13.866L9.91744 15.062C9.80186 15.1764 9.65 15.2337 9.49919 15.2337C9.34838 15.2337 9.19729 15.176 9.08171 15.062L7.87179 13.866Z" fill="#F59E0B"/>
                                        </svg>
                                    </div>
                                    <div class="info">
                                        <p>Q1 2025 Leadership - Eneo Cameroon</p>
                                        <span>Regional leadership 360° evaluation for first quarter.</span>
                                    </div>
                                </div>
                            </td>

                            <td>
                                <div class="town">
                                    360°
                                </div>
                            </td>

                            <td>3</td>

                            <td>
                                <div class="status ongoing">
                                    Ongoing
                                </div>
                            </td>

                            <td>
                                <div class="progress-container">
                                    <div class="progress-bar">
                                        <div class="progress-fill" style="width: 65%;"></div>
                                    </div>
                                    <span>78/120</span>
                                </div>
                            </td>

                            <td>
                                15 Jun 2025
                            </td>

                            <td>
                                <div class="actions">
                                    <button class="view-btn" onclick="viewCLientDetails()">
                                        View
                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8.35826 3.16602L12.168 6.97572M12.168 6.97572L8.35826 10.7854M12.168 6.97572L2.37158 6.97572" stroke="white" stroke-width="0.653092" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </button>
                                    <button class="edit-btn" onclick="editCLientModal()">
                                        Edit
                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M6.91127 3.16564H4.19005C3.58889 3.16564 3.10156 3.65297 3.10156 4.25412V10.2408C3.10156 10.842 3.58889 11.3293 4.19005 11.3293H10.1767C10.7779 11.3293 11.2652 10.842 11.2652 10.2408V7.51959M10.4955 2.39596C10.9206 1.97088 11.6098 1.97088 12.0349 2.39596C12.46 2.82104 12.46 3.51023 12.0349 3.93531L7.36213 8.60807H5.82278L5.82278 7.06872L10.4955 2.39596Z" stroke="#137699" stroke-width="0.653092" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </button>
                                    <button class="delete-btn" onclick="deleteClientModal()">
                                        Delete
                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M10.608 4.09983L10.136 10.7083C10.0953 11.2779 9.6213 11.7192 9.05023 11.7192H4.54633C3.97527 11.7192 3.5013 11.2779 3.46061 10.7083L2.98858 4.09983M5.7098 6.2768V9.54226M7.88677 6.2768V9.54226M8.43102 4.09983V2.4671C8.43102 2.16652 8.18735 1.92285 7.88677 1.92285H5.7098C5.40922 1.92285 5.16555 2.16652 5.16555 2.4671V4.09983M2.44434 4.09983H11.1522" stroke="#FF383C" stroke-width="0.653092" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <div class="content">
                                    <div class="profile">
                                        <img src="{{asset('images/mtn.png')}}" alt="">
                                    </div>
                                    <div class="info">
                                        <p>MTN Cameroon</p>
                                        <span>Telecommunications</span>
                                    </div>
                                </div>
                            </td>

                             <td>
                                <div class="content">
                                    <div class="survey">
                                        <svg width="19" height="20" viewBox="0 0 19 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9.49996 1.46686C9.34905 1.46686 9.19807 1.52429 9.08248 1.63849L8.10836 2.60179L6.78325 2.25389C6.46777 2.17037 6.14551 2.35824 6.05961 2.67214L5.70012 3.99339L4.37887 4.35366C4.06458 4.43916 3.87828 4.76221 3.96062 5.07729L4.30774 6.4024L3.34445 7.37575C3.11565 7.60692 3.11565 7.97955 3.34445 8.21071L4.30774 9.18483L3.95984 10.5099C3.87711 10.825 4.0638 11.1477 4.3781 11.2336L5.69934 11.5939L6.05961 12.9151C6.14551 13.229 6.46777 13.4169 6.78325 13.3326L8.10836 12.9855L9.08248 13.9488C9.19807 14.0631 9.34992 14.1196 9.50074 14.1196C9.65155 14.1196 9.80263 14.0628 9.91822 13.9488L10.8923 12.9855L12.2167 13.3334C12.5333 13.4173 12.8544 13.229 12.9403 12.9151L13.2998 11.5939L14.6211 11.2336C14.9353 11.1481 15.1216 10.825 15.0393 10.5099L14.6922 9.18483L15.6555 8.21071C15.8843 7.97955 15.8843 7.60732 15.6555 7.37575L14.6922 6.4024L15.0401 5.07729C15.1228 4.76221 14.9361 4.43955 14.6218 4.35366L13.3006 3.99339L12.9403 2.67214C12.8544 2.35824 12.5333 2.17037 12.2167 2.25389L10.8916 2.60179L9.91744 1.63849C9.80186 1.52429 9.65087 1.46686 9.49996 1.46686ZM7.87179 13.866L6.22506 14.2982C6.12689 14.3239 6.02892 14.3211 5.93669 14.299V18.2813C5.93669 18.5002 6.05703 18.7018 6.2498 18.8047C6.44257 18.9084 6.6777 18.8968 6.85979 18.7753L9.38941 17.0884C9.4567 17.0444 9.54247 17.044 9.60897 17.0884L12.1394 18.7745C12.2391 18.8414 12.3535 18.875 12.4687 18.875C12.5649 18.875 12.6607 18.8518 12.7486 18.8047C12.9414 18.7018 13.0625 18.5002 13.0625 18.2813V14.299C12.9706 14.3207 12.8723 14.3239 12.7741 14.2982L11.1274 13.866L9.91744 15.062C9.80186 15.1764 9.65 15.2337 9.49919 15.2337C9.34838 15.2337 9.19729 15.176 9.08171 15.062L7.87179 13.866Z" fill="#F59E0B"/>
                                        </svg>
                                    </div>
                                    <div class="info">
                                        <p>Q1 2025 Leadership - Eneo Cameroon</p>
                                        <span>Regional leadership 360° evaluation for first quarter.</span>
                                    </div>
                                </div>
                            </td>

                            <td>
                                <div class="town">
                                    360°
                                </div>
                            </td>

                            <td>3</td>

                            <td>
                                <div class="status ongoing">
                                    Ongoing
                                </div>
                            </td>

                            <td>
                                <div class="progress-container">
                                    <div class="progress-bar">
                                        <div class="progress-fill" style="width: 65%;"></div>
                                    </div>
                                    <span>78/120</span>
                                </div>
                            </td>

                            <td>
                                15 Jun 2025
                            </td>

                            <td>
                                <div class="actions">
                                    <button class="view-btn" onclick="viewCLientDetails()">
                                        View
                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8.35826 3.16602L12.168 6.97572M12.168 6.97572L8.35826 10.7854M12.168 6.97572L2.37158 6.97572" stroke="white" stroke-width="0.653092" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </button>
                                    <button class="edit-btn" onclick="editCLientModal()">
                                        Edit
                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M6.91127 3.16564H4.19005C3.58889 3.16564 3.10156 3.65297 3.10156 4.25412V10.2408C3.10156 10.842 3.58889 11.3293 4.19005 11.3293H10.1767C10.7779 11.3293 11.2652 10.842 11.2652 10.2408V7.51959M10.4955 2.39596C10.9206 1.97088 11.6098 1.97088 12.0349 2.39596C12.46 2.82104 12.46 3.51023 12.0349 3.93531L7.36213 8.60807H5.82278L5.82278 7.06872L10.4955 2.39596Z" stroke="#137699" stroke-width="0.653092" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </button>
                                    <button class="delete-btn" onclick="deleteClientModal()">
                                        Delete
                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M10.608 4.09983L10.136 10.7083C10.0953 11.2779 9.6213 11.7192 9.05023 11.7192H4.54633C3.97527 11.7192 3.5013 11.2779 3.46061 10.7083L2.98858 4.09983M5.7098 6.2768V9.54226M7.88677 6.2768V9.54226M8.43102 4.09983V2.4671C8.43102 2.16652 8.18735 1.92285 7.88677 1.92285H5.7098C5.40922 1.92285 5.16555 2.16652 5.16555 2.4671V4.09983M2.44434 4.09983H11.1522" stroke="#FF383C" stroke-width="0.653092" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <div class="content">
                                    <div class="profile">
                                        <img src="{{asset('images/mtn.png')}}" alt="">
                                    </div>
                                    <div class="info">
                                        <p>MTN Cameroon</p>
                                        <span>Telecommunications</span>
                                    </div>
                                </div>
                            </td>

                             <td>
                                <div class="content">
                                    <div class="survey">
                                        <svg width="19" height="20" viewBox="0 0 19 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9.49996 1.46686C9.34905 1.46686 9.19807 1.52429 9.08248 1.63849L8.10836 2.60179L6.78325 2.25389C6.46777 2.17037 6.14551 2.35824 6.05961 2.67214L5.70012 3.99339L4.37887 4.35366C4.06458 4.43916 3.87828 4.76221 3.96062 5.07729L4.30774 6.4024L3.34445 7.37575C3.11565 7.60692 3.11565 7.97955 3.34445 8.21071L4.30774 9.18483L3.95984 10.5099C3.87711 10.825 4.0638 11.1477 4.3781 11.2336L5.69934 11.5939L6.05961 12.9151C6.14551 13.229 6.46777 13.4169 6.78325 13.3326L8.10836 12.9855L9.08248 13.9488C9.19807 14.0631 9.34992 14.1196 9.50074 14.1196C9.65155 14.1196 9.80263 14.0628 9.91822 13.9488L10.8923 12.9855L12.2167 13.3334C12.5333 13.4173 12.8544 13.229 12.9403 12.9151L13.2998 11.5939L14.6211 11.2336C14.9353 11.1481 15.1216 10.825 15.0393 10.5099L14.6922 9.18483L15.6555 8.21071C15.8843 7.97955 15.8843 7.60732 15.6555 7.37575L14.6922 6.4024L15.0401 5.07729C15.1228 4.76221 14.9361 4.43955 14.6218 4.35366L13.3006 3.99339L12.9403 2.67214C12.8544 2.35824 12.5333 2.17037 12.2167 2.25389L10.8916 2.60179L9.91744 1.63849C9.80186 1.52429 9.65087 1.46686 9.49996 1.46686ZM7.87179 13.866L6.22506 14.2982C6.12689 14.3239 6.02892 14.3211 5.93669 14.299V18.2813C5.93669 18.5002 6.05703 18.7018 6.2498 18.8047C6.44257 18.9084 6.6777 18.8968 6.85979 18.7753L9.38941 17.0884C9.4567 17.0444 9.54247 17.044 9.60897 17.0884L12.1394 18.7745C12.2391 18.8414 12.3535 18.875 12.4687 18.875C12.5649 18.875 12.6607 18.8518 12.7486 18.8047C12.9414 18.7018 13.0625 18.5002 13.0625 18.2813V14.299C12.9706 14.3207 12.8723 14.3239 12.7741 14.2982L11.1274 13.866L9.91744 15.062C9.80186 15.1764 9.65 15.2337 9.49919 15.2337C9.34838 15.2337 9.19729 15.176 9.08171 15.062L7.87179 13.866Z" fill="#F59E0B"/>
                                        </svg>
                                    </div>
                                    <div class="info">
                                        <p>Q1 2025 Leadership - Eneo Cameroon</p>
                                        <span>Regional leadership 360° evaluation for first quarter.</span>
                                    </div>
                                </div>
                            </td>

                            <td>
                                <div class="town">
                                    360°
                                </div>
                            </td>

                            <td>3</td>

                            <td>
                                <div class="status ongoing">
                                    Ongoing
                                </div>
                            </td>

                            <td>
                                <div class="progress-container">
                                    <div class="progress-bar">
                                        <div class="progress-fill" style="width: 65%;"></div>
                                    </div>
                                    <span>78/120</span>
                                </div>
                            </td>

                            <td>
                                15 Jun 2025
                            </td>

                            <td>
                                <div class="actions">
                                    <button class="view-btn" onclick="viewCLientDetails()">
                                        View
                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8.35826 3.16602L12.168 6.97572M12.168 6.97572L8.35826 10.7854M12.168 6.97572L2.37158 6.97572" stroke="white" stroke-width="0.653092" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </button>
                                    <button class="edit-btn" onclick="editCLientModal()">
                                        Edit
                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M6.91127 3.16564H4.19005C3.58889 3.16564 3.10156 3.65297 3.10156 4.25412V10.2408C3.10156 10.842 3.58889 11.3293 4.19005 11.3293H10.1767C10.7779 11.3293 11.2652 10.842 11.2652 10.2408V7.51959M10.4955 2.39596C10.9206 1.97088 11.6098 1.97088 12.0349 2.39596C12.46 2.82104 12.46 3.51023 12.0349 3.93531L7.36213 8.60807H5.82278L5.82278 7.06872L10.4955 2.39596Z" stroke="#137699" stroke-width="0.653092" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </button>
                                    <button class="delete-btn" onclick="deleteClientModal()">
                                        Delete
                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M10.608 4.09983L10.136 10.7083C10.0953 11.2779 9.6213 11.7192 9.05023 11.7192H4.54633C3.97527 11.7192 3.5013 11.2779 3.46061 10.7083L2.98858 4.09983M5.7098 6.2768V9.54226M7.88677 6.2768V9.54226M8.43102 4.09983V2.4671C8.43102 2.16652 8.18735 1.92285 7.88677 1.92285H5.7098C5.40922 1.92285 5.16555 2.16652 5.16555 2.4671V4.09983M2.44434 4.09983H11.1522" stroke="#FF383C" stroke-width="0.653092" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </button>
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
    </div>

    {{-- completed surveys --}}
    <div id="completed" class="content">
        <div class="section">
            <div class="table-container except">
                <header>
                    <div class="search-input">
                        <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M14.5039 13.8306L12.2123 11.5902L12.1586 11.5085C12.0587 11.409 11.9221 11.353 11.7796 11.353C11.6371 11.353 11.5005 11.409 11.4007 11.5085C9.45315 13.2952 6.45226 13.3923 4.38817 11.7354C2.32407 10.0786 1.83728 7.18185 3.25062 4.96638C4.66396 2.75092 7.53888 1.90417 9.96873 2.98769C12.3986 4.07122 13.6294 6.7488 12.8448 9.24467C12.7883 9.42497 12.8345 9.62105 12.966 9.75905C13.0975 9.89704 13.2942 9.95598 13.4822 9.91366C13.6702 9.87135 13.8208 9.7342 13.8773 9.5539C14.8151 6.59203 13.3987 3.40464 10.5442 2.05364C7.68982 0.702644 4.25406 1.59349 2.45953 4.14988C0.66501 6.70628 1.05028 10.161 3.36612 12.2793C5.68195 14.3975 9.23335 14.5435 11.7229 12.6229L13.7519 14.6066C13.9615 14.8106 14.3003 14.8106 14.5098 14.6066C14.7192 14.3997 14.7192 14.0667 14.5098 13.8598L14.5039 13.8306Z" fill="#667085"/>
                        </svg>
                        <input type="text" placeholder="Search sessions, clients, manager...">
                    </div>

                    <div class="action-btns">
                        <div class="btn">
                            <div class="icon">
                                <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2.60449 3.08453C2.60449 2.66975 2.94074 2.3335 3.35552 2.3335H15.372C15.7868 2.3335 16.1231 2.66974 16.1231 3.08453V5.02654C16.1231 5.22572 16.044 5.41675 15.9031 5.5576L11.0858 10.3749C10.945 10.5157 10.8659 10.7068 10.8659 10.9059V12.848L7.86172 15.8521V10.9059C7.86172 10.7068 7.78259 10.5157 7.64175 10.3749L2.82446 5.5576C2.68362 5.41675 2.60449 5.22572 2.60449 5.02654V3.08453Z" stroke="#202020" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                Status:
                            </div>
                            <select name="" id="">
                                <option value="">ALl</option>
                                <option value="">Ongoing</option>
                                <option value="">Completed</option>
                                <option value="">Draft</option>
                            </select>
                        </div>

                        <div class="btn">
                            <div class="icon">
                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4.79642 9.09283H13.3317M2.6626 4.8252H15.4655M6.93024 13.3605H11.1979" stroke="#344054" stroke-width="1.42539" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                Sort By:
                            </div>
                            <select name="" id="">
                                <option value="">Newest</option>
                                <option value="">Oldest</option>
                            </select>
                        </div>

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
                                <p>
                                    CLIENT
                                    <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6.56994 2.81934V10.26M6.56994 10.26L10.2903 6.53966M6.56994 10.26L2.84961 6.53966" stroke="#667085" stroke-width="1.06295" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </p>
                            </th>

                            <th>
                                <p>
                                    SESSION
                                    <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6.56994 2.81934V10.26M6.56994 10.26L10.2903 6.53966M6.56994 10.26L2.84961 6.53966" stroke="#667085" stroke-width="1.06295" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </p>
                            </th>

                            <th>
                                <p>
                                    TYPE
                                    <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6.56994 2.81934V10.26M6.56994 10.26L10.2903 6.53966M6.56994 10.26L2.84961 6.53966" stroke="#667085" stroke-width="1.06295" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </p>
                            </th>

                            <th>
                                <p>
                                    MANAGER
                                    <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6.56994 2.81934V10.26M6.56994 10.26L10.2903 6.53966M6.56994 10.26L2.84961 6.53966" stroke="#667085" stroke-width="1.06295" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </p>
                            </th>

                            <th>
                                <p>
                                    STATUS
                                    <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6.56994 2.81934V10.26M6.56994 10.26L10.2903 6.53966M6.56994 10.26L2.84961 6.53966" stroke="#667085" stroke-width="1.06295" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </p>
                            </th>

                            <th>
                                <p>
                                    PROGRESS
                                    <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6.56994 2.81934V10.26M6.56994 10.26L10.2903 6.53966M6.56994 10.26L2.84961 6.53966" stroke="#667085" stroke-width="1.06295" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </p>
                            </th>

                            <th>
                                <p>
                                    CREATED
                                    <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6.56994 2.81934V10.26M6.56994 10.26L10.2903 6.53966M6.56994 10.26L2.84961 6.53966" stroke="#667085" stroke-width="1.06295" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </p>
                            </th>

                            <th>
                                <p>
                                    ACTIONS
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
                                <div class="content">
                                    <div class="profile">
                                        <img src="{{asset('images/eneo.png')}}" alt="">
                                    </div>
                                    <div class="info">
                                        <p>Eneo Cameroon S.A.</p>
                                        <span>Energy</span>
                                    </div>
                                </div>
                            </td>

                             <td>
                                <div class="content">
                                    <div class="survey">
                                        <svg width="19" height="20" viewBox="0 0 19 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9.49996 1.46686C9.34905 1.46686 9.19807 1.52429 9.08248 1.63849L8.10836 2.60179L6.78325 2.25389C6.46777 2.17037 6.14551 2.35824 6.05961 2.67214L5.70012 3.99339L4.37887 4.35366C4.06458 4.43916 3.87828 4.76221 3.96062 5.07729L4.30774 6.4024L3.34445 7.37575C3.11565 7.60692 3.11565 7.97955 3.34445 8.21071L4.30774 9.18483L3.95984 10.5099C3.87711 10.825 4.0638 11.1477 4.3781 11.2336L5.69934 11.5939L6.05961 12.9151C6.14551 13.229 6.46777 13.4169 6.78325 13.3326L8.10836 12.9855L9.08248 13.9488C9.19807 14.0631 9.34992 14.1196 9.50074 14.1196C9.65155 14.1196 9.80263 14.0628 9.91822 13.9488L10.8923 12.9855L12.2167 13.3334C12.5333 13.4173 12.8544 13.229 12.9403 12.9151L13.2998 11.5939L14.6211 11.2336C14.9353 11.1481 15.1216 10.825 15.0393 10.5099L14.6922 9.18483L15.6555 8.21071C15.8843 7.97955 15.8843 7.60732 15.6555 7.37575L14.6922 6.4024L15.0401 5.07729C15.1228 4.76221 14.9361 4.43955 14.6218 4.35366L13.3006 3.99339L12.9403 2.67214C12.8544 2.35824 12.5333 2.17037 12.2167 2.25389L10.8916 2.60179L9.91744 1.63849C9.80186 1.52429 9.65087 1.46686 9.49996 1.46686ZM7.87179 13.866L6.22506 14.2982C6.12689 14.3239 6.02892 14.3211 5.93669 14.299V18.2813C5.93669 18.5002 6.05703 18.7018 6.2498 18.8047C6.44257 18.9084 6.6777 18.8968 6.85979 18.7753L9.38941 17.0884C9.4567 17.0444 9.54247 17.044 9.60897 17.0884L12.1394 18.7745C12.2391 18.8414 12.3535 18.875 12.4687 18.875C12.5649 18.875 12.6607 18.8518 12.7486 18.8047C12.9414 18.7018 13.0625 18.5002 13.0625 18.2813V14.299C12.9706 14.3207 12.8723 14.3239 12.7741 14.2982L11.1274 13.866L9.91744 15.062C9.80186 15.1764 9.65 15.2337 9.49919 15.2337C9.34838 15.2337 9.19729 15.176 9.08171 15.062L7.87179 13.866Z" fill="#F59E0B"/>
                                        </svg>
                                    </div>
                                    <div class="info">
                                        <p>Q1 2025 Leadership - Eneo Cameroon</p>
                                        <span>Regional leadership 360° evaluation for first quarter.</span>
                                    </div>
                                </div>
                            </td>

                            <td>
                                <div class="town">
                                    360°
                                </div>
                            </td>

                            <td>3</td>

                            <td>
                                <div class="status complete">
                                    Completed
                                </div>
                            </td>

                            <td>
                                <div class="progress-container">
                                    <div class="progress-bar">
                                        <div class="progress-fill" style="width: 65%;"></div>
                                    </div>
                                    <span>78/120</span>
                                </div>
                            </td>

                            <td>
                                15 Jun 2025
                            </td>

                            <td>
                                <div class="actions">
                                    <button class="view-btn">
                                        View
                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8.35826 3.16602L12.168 6.97572M12.168 6.97572L8.35826 10.7854M12.168 6.97572L2.37158 6.97572" stroke="white" stroke-width="0.653092" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </button>
                                    <button class="edit-btn">
                                        Edit
                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M6.91127 3.16564H4.19005C3.58889 3.16564 3.10156 3.65297 3.10156 4.25412V10.2408C3.10156 10.842 3.58889 11.3293 4.19005 11.3293H10.1767C10.7779 11.3293 11.2652 10.842 11.2652 10.2408V7.51959M10.4955 2.39596C10.9206 1.97088 11.6098 1.97088 12.0349 2.39596C12.46 2.82104 12.46 3.51023 12.0349 3.93531L7.36213 8.60807H5.82278L5.82278 7.06872L10.4955 2.39596Z" stroke="#137699" stroke-width="0.653092" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </button>
                                    <button class="delete-btn" >
                                        Delete
                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M10.608 4.09983L10.136 10.7083C10.0953 11.2779 9.6213 11.7192 9.05023 11.7192H4.54633C3.97527 11.7192 3.5013 11.2779 3.46061 10.7083L2.98858 4.09983M5.7098 6.2768V9.54226M7.88677 6.2768V9.54226M8.43102 4.09983V2.4671C8.43102 2.16652 8.18735 1.92285 7.88677 1.92285H5.7098C5.40922 1.92285 5.16555 2.16652 5.16555 2.4671V4.09983M2.44434 4.09983H11.1522" stroke="#FF383C" stroke-width="0.653092" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <div class="content">
                                    <div class="profile">
                                        <img src="{{asset('images/eneo.png')}}" alt="">
                                    </div>
                                    <div class="info">
                                        <p>Eneo Cameroon S.A.</p>
                                        <span>Energy</span>
                                    </div>
                                </div>
                            </td>

                             <td>
                                <div class="content">
                                    <div class="survey">
                                        <svg width="19" height="20" viewBox="0 0 19 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9.49996 1.46686C9.34905 1.46686 9.19807 1.52429 9.08248 1.63849L8.10836 2.60179L6.78325 2.25389C6.46777 2.17037 6.14551 2.35824 6.05961 2.67214L5.70012 3.99339L4.37887 4.35366C4.06458 4.43916 3.87828 4.76221 3.96062 5.07729L4.30774 6.4024L3.34445 7.37575C3.11565 7.60692 3.11565 7.97955 3.34445 8.21071L4.30774 9.18483L3.95984 10.5099C3.87711 10.825 4.0638 11.1477 4.3781 11.2336L5.69934 11.5939L6.05961 12.9151C6.14551 13.229 6.46777 13.4169 6.78325 13.3326L8.10836 12.9855L9.08248 13.9488C9.19807 14.0631 9.34992 14.1196 9.50074 14.1196C9.65155 14.1196 9.80263 14.0628 9.91822 13.9488L10.8923 12.9855L12.2167 13.3334C12.5333 13.4173 12.8544 13.229 12.9403 12.9151L13.2998 11.5939L14.6211 11.2336C14.9353 11.1481 15.1216 10.825 15.0393 10.5099L14.6922 9.18483L15.6555 8.21071C15.8843 7.97955 15.8843 7.60732 15.6555 7.37575L14.6922 6.4024L15.0401 5.07729C15.1228 4.76221 14.9361 4.43955 14.6218 4.35366L13.3006 3.99339L12.9403 2.67214C12.8544 2.35824 12.5333 2.17037 12.2167 2.25389L10.8916 2.60179L9.91744 1.63849C9.80186 1.52429 9.65087 1.46686 9.49996 1.46686ZM7.87179 13.866L6.22506 14.2982C6.12689 14.3239 6.02892 14.3211 5.93669 14.299V18.2813C5.93669 18.5002 6.05703 18.7018 6.2498 18.8047C6.44257 18.9084 6.6777 18.8968 6.85979 18.7753L9.38941 17.0884C9.4567 17.0444 9.54247 17.044 9.60897 17.0884L12.1394 18.7745C12.2391 18.8414 12.3535 18.875 12.4687 18.875C12.5649 18.875 12.6607 18.8518 12.7486 18.8047C12.9414 18.7018 13.0625 18.5002 13.0625 18.2813V14.299C12.9706 14.3207 12.8723 14.3239 12.7741 14.2982L11.1274 13.866L9.91744 15.062C9.80186 15.1764 9.65 15.2337 9.49919 15.2337C9.34838 15.2337 9.19729 15.176 9.08171 15.062L7.87179 13.866Z" fill="#F59E0B"/>
                                        </svg>
                                    </div>
                                    <div class="info">
                                        <p>Q1 2025 Leadership - Eneo Cameroon</p>
                                        <span>Regional leadership 360° evaluation for first quarter.</span>
                                    </div>
                                </div>
                            </td>

                            <td>
                                <div class="town">
                                    360°
                                </div>
                            </td>

                            <td>3</td>

                            <td>
                                <div class="status complete">
                                    Completed
                                </div>
                            </td>

                            <td>
                                <div class="progress-container">
                                    <div class="progress-bar">
                                        <div class="progress-fill" style="width: 65%;"></div>
                                    </div>
                                    <span>78/120</span>
                                </div>
                            </td>

                            <td>
                                15 Jun 2025
                            </td>

                            <td>
                                <div class="actions">
                                    <button class="view-btn">
                                        View
                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8.35826 3.16602L12.168 6.97572M12.168 6.97572L8.35826 10.7854M12.168 6.97572L2.37158 6.97572" stroke="white" stroke-width="0.653092" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </button>
                                    <button class="edit-btn">
                                        Edit
                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M6.91127 3.16564H4.19005C3.58889 3.16564 3.10156 3.65297 3.10156 4.25412V10.2408C3.10156 10.842 3.58889 11.3293 4.19005 11.3293H10.1767C10.7779 11.3293 11.2652 10.842 11.2652 10.2408V7.51959M10.4955 2.39596C10.9206 1.97088 11.6098 1.97088 12.0349 2.39596C12.46 2.82104 12.46 3.51023 12.0349 3.93531L7.36213 8.60807H5.82278L5.82278 7.06872L10.4955 2.39596Z" stroke="#137699" stroke-width="0.653092" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </button>
                                    <button class="delete-btn" >
                                        Delete
                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M10.608 4.09983L10.136 10.7083C10.0953 11.2779 9.6213 11.7192 9.05023 11.7192H4.54633C3.97527 11.7192 3.5013 11.2779 3.46061 10.7083L2.98858 4.09983M5.7098 6.2768V9.54226M7.88677 6.2768V9.54226M8.43102 4.09983V2.4671C8.43102 2.16652 8.18735 1.92285 7.88677 1.92285H5.7098C5.40922 1.92285 5.16555 2.16652 5.16555 2.4671V4.09983M2.44434 4.09983H11.1522" stroke="#FF383C" stroke-width="0.653092" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <div class="content">
                                    <div class="profile">
                                        <img src="{{asset('images/eneo.png')}}" alt="">
                                    </div>
                                    <div class="info">
                                        <p>Eneo Cameroon S.A.</p>
                                        <span>Energy</span>
                                    </div>
                                </div>
                            </td>

                            <td>
                                <div class="content">
                                    <div class="survey">
                                        <svg width="19" height="20" viewBox="0 0 19 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9.49996 1.46686C9.34905 1.46686 9.19807 1.52429 9.08248 1.63849L8.10836 2.60179L6.78325 2.25389C6.46777 2.17037 6.14551 2.35824 6.05961 2.67214L5.70012 3.99339L4.37887 4.35366C4.06458 4.43916 3.87828 4.76221 3.96062 5.07729L4.30774 6.4024L3.34445 7.37575C3.11565 7.60692 3.11565 7.97955 3.34445 8.21071L4.30774 9.18483L3.95984 10.5099C3.87711 10.825 4.0638 11.1477 4.3781 11.2336L5.69934 11.5939L6.05961 12.9151C6.14551 13.229 6.46777 13.4169 6.78325 13.3326L8.10836 12.9855L9.08248 13.9488C9.19807 14.0631 9.34992 14.1196 9.50074 14.1196C9.65155 14.1196 9.80263 14.0628 9.91822 13.9488L10.8923 12.9855L12.2167 13.3334C12.5333 13.4173 12.8544 13.229 12.9403 12.9151L13.2998 11.5939L14.6211 11.2336C14.9353 11.1481 15.1216 10.825 15.0393 10.5099L14.6922 9.18483L15.6555 8.21071C15.8843 7.97955 15.8843 7.60732 15.6555 7.37575L14.6922 6.4024L15.0401 5.07729C15.1228 4.76221 14.9361 4.43955 14.6218 4.35366L13.3006 3.99339L12.9403 2.67214C12.8544 2.35824 12.5333 2.17037 12.2167 2.25389L10.8916 2.60179L9.91744 1.63849C9.80186 1.52429 9.65087 1.46686 9.49996 1.46686ZM7.87179 13.866L6.22506 14.2982C6.12689 14.3239 6.02892 14.3211 5.93669 14.299V18.2813C5.93669 18.5002 6.05703 18.7018 6.2498 18.8047C6.44257 18.9084 6.6777 18.8968 6.85979 18.7753L9.38941 17.0884C9.4567 17.0444 9.54247 17.044 9.60897 17.0884L12.1394 18.7745C12.2391 18.8414 12.3535 18.875 12.4687 18.875C12.5649 18.875 12.6607 18.8518 12.7486 18.8047C12.9414 18.7018 13.0625 18.5002 13.0625 18.2813V14.299C12.9706 14.3207 12.8723 14.3239 12.7741 14.2982L11.1274 13.866L9.91744 15.062C9.80186 15.1764 9.65 15.2337 9.49919 15.2337C9.34838 15.2337 9.19729 15.176 9.08171 15.062L7.87179 13.866Z" fill="#F59E0B"/>
                                        </svg>
                                    </div>
                                    <div class="info">
                                        <p>Q1 2025 Leadership - Eneo Cameroon</p>
                                        <span>Regional leadership 360° evaluation for first quarter.</span>
                                    </div>
                                </div>
                            </td>

                            <td>
                                <div class="town">
                                    360°
                                </div>
                            </td>

                            <td>3</td>

                            <td>
                                <div class="status complete">
                                    Completed
                                </div>
                            </td>

                            <td>
                                <div class="progress-container">
                                    <div class="progress-bar">
                                        <div class="progress-fill" style="width: 65%;"></div>
                                    </div>
                                    <span>78/120</span>
                                </div>
                            </td>

                            <td>
                                15 Jun 2025
                            </td>

                            <td>
                                <div class="actions">
                                    <button class="view-btn">
                                        View
                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8.35826 3.16602L12.168 6.97572M12.168 6.97572L8.35826 10.7854M12.168 6.97572L2.37158 6.97572" stroke="white" stroke-width="0.653092" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </button>
                                    <button class="edit-btn">
                                        Edit
                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M6.91127 3.16564H4.19005C3.58889 3.16564 3.10156 3.65297 3.10156 4.25412V10.2408C3.10156 10.842 3.58889 11.3293 4.19005 11.3293H10.1767C10.7779 11.3293 11.2652 10.842 11.2652 10.2408V7.51959M10.4955 2.39596C10.9206 1.97088 11.6098 1.97088 12.0349 2.39596C12.46 2.82104 12.46 3.51023 12.0349 3.93531L7.36213 8.60807H5.82278L5.82278 7.06872L10.4955 2.39596Z" stroke="#137699" stroke-width="0.653092" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </button>
                                    <button class="delete-btn" >
                                        Delete
                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M10.608 4.09983L10.136 10.7083C10.0953 11.2779 9.6213 11.7192 9.05023 11.7192H4.54633C3.97527 11.7192 3.5013 11.2779 3.46061 10.7083L2.98858 4.09983M5.7098 6.2768V9.54226M7.88677 6.2768V9.54226M8.43102 4.09983V2.4671C8.43102 2.16652 8.18735 1.92285 7.88677 1.92285H5.7098C5.40922 1.92285 5.16555 2.16652 5.16555 2.4671V4.09983M2.44434 4.09983H11.1522" stroke="#FF383C" stroke-width="0.653092" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </button>
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
    </div>

    {{-- draft surveys --}}
    <div id="drafts" class="content">
        <div class="section">
            <div class="table-container except">
                <header>
                    <div class="search-input">
                        <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M14.5039 13.8306L12.2123 11.5902L12.1586 11.5085C12.0587 11.409 11.9221 11.353 11.7796 11.353C11.6371 11.353 11.5005 11.409 11.4007 11.5085C9.45315 13.2952 6.45226 13.3923 4.38817 11.7354C2.32407 10.0786 1.83728 7.18185 3.25062 4.96638C4.66396 2.75092 7.53888 1.90417 9.96873 2.98769C12.3986 4.07122 13.6294 6.7488 12.8448 9.24467C12.7883 9.42497 12.8345 9.62105 12.966 9.75905C13.0975 9.89704 13.2942 9.95598 13.4822 9.91366C13.6702 9.87135 13.8208 9.7342 13.8773 9.5539C14.8151 6.59203 13.3987 3.40464 10.5442 2.05364C7.68982 0.702644 4.25406 1.59349 2.45953 4.14988C0.66501 6.70628 1.05028 10.161 3.36612 12.2793C5.68195 14.3975 9.23335 14.5435 11.7229 12.6229L13.7519 14.6066C13.9615 14.8106 14.3003 14.8106 14.5098 14.6066C14.7192 14.3997 14.7192 14.0667 14.5098 13.8598L14.5039 13.8306Z" fill="#667085"/>
                        </svg>
                        <input type="text" placeholder="Search sessions, clients, manager...">
                    </div>

                    <div class="action-btns">
                        <div class="btn">
                            <div class="icon">
                                <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2.60449 3.08453C2.60449 2.66975 2.94074 2.3335 3.35552 2.3335H15.372C15.7868 2.3335 16.1231 2.66974 16.1231 3.08453V5.02654C16.1231 5.22572 16.044 5.41675 15.9031 5.5576L11.0858 10.3749C10.945 10.5157 10.8659 10.7068 10.8659 10.9059V12.848L7.86172 15.8521V10.9059C7.86172 10.7068 7.78259 10.5157 7.64175 10.3749L2.82446 5.5576C2.68362 5.41675 2.60449 5.22572 2.60449 5.02654V3.08453Z" stroke="#202020" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                Status:
                            </div>
                            <select name="" id="">
                                <option value="">ALl</option>
                                <option value="">Ongoing</option>
                                <option value="">Completed</option>
                                <option value="">Draft</option>
                            </select>
                        </div>

                        <div class="btn">
                            <div class="icon">
                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4.79642 9.09283H13.3317M2.6626 4.8252H15.4655M6.93024 13.3605H11.1979" stroke="#344054" stroke-width="1.42539" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                Sort By:
                            </div>
                            <select name="" id="">
                                <option value="">Newest</option>
                                <option value="">Oldest</option>
                            </select>
                        </div>

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
                                <p>
                                    CLIENT
                                    <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6.56994 2.81934V10.26M6.56994 10.26L10.2903 6.53966M6.56994 10.26L2.84961 6.53966" stroke="#667085" stroke-width="1.06295" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </p>
                            </th>

                            <th>
                                <p>
                                    SESSION
                                    <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6.56994 2.81934V10.26M6.56994 10.26L10.2903 6.53966M6.56994 10.26L2.84961 6.53966" stroke="#667085" stroke-width="1.06295" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </p>
                            </th>

                            <th>
                                <p>
                                    TYPE
                                    <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6.56994 2.81934V10.26M6.56994 10.26L10.2903 6.53966M6.56994 10.26L2.84961 6.53966" stroke="#667085" stroke-width="1.06295" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </p>
                            </th>

                            <th>
                                <p>
                                    MANAGER
                                    <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6.56994 2.81934V10.26M6.56994 10.26L10.2903 6.53966M6.56994 10.26L2.84961 6.53966" stroke="#667085" stroke-width="1.06295" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </p>
                            </th>

                            <th>
                                <p>
                                    STATUS
                                    <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6.56994 2.81934V10.26M6.56994 10.26L10.2903 6.53966M6.56994 10.26L2.84961 6.53966" stroke="#667085" stroke-width="1.06295" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </p>
                            </th>

                            <th>
                                <p>
                                    PROGRESS
                                    <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6.56994 2.81934V10.26M6.56994 10.26L10.2903 6.53966M6.56994 10.26L2.84961 6.53966" stroke="#667085" stroke-width="1.06295" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </p>
                            </th>

                            <th>
                                <p>
                                    CREATED
                                    <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6.56994 2.81934V10.26M6.56994 10.26L10.2903 6.53966M6.56994 10.26L2.84961 6.53966" stroke="#667085" stroke-width="1.06295" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </p>
                            </th>

                            <th>
                                <p>
                                    ACTIONS
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
                                <div class="content">
                                    <div class="profile">
                                        <img src="{{asset('images/mtn.png')}}" alt="">
                                    </div>
                                    <div class="info">
                                        <p>MTN Cameroon</p>
                                        <span>Telecommunications</span>
                                    </div>
                                </div>
                            </td>

                             <td>
                                <div class="content">
                                    <div class="survey">
                                        <svg width="19" height="20" viewBox="0 0 19 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9.49996 1.46686C9.34905 1.46686 9.19807 1.52429 9.08248 1.63849L8.10836 2.60179L6.78325 2.25389C6.46777 2.17037 6.14551 2.35824 6.05961 2.67214L5.70012 3.99339L4.37887 4.35366C4.06458 4.43916 3.87828 4.76221 3.96062 5.07729L4.30774 6.4024L3.34445 7.37575C3.11565 7.60692 3.11565 7.97955 3.34445 8.21071L4.30774 9.18483L3.95984 10.5099C3.87711 10.825 4.0638 11.1477 4.3781 11.2336L5.69934 11.5939L6.05961 12.9151C6.14551 13.229 6.46777 13.4169 6.78325 13.3326L8.10836 12.9855L9.08248 13.9488C9.19807 14.0631 9.34992 14.1196 9.50074 14.1196C9.65155 14.1196 9.80263 14.0628 9.91822 13.9488L10.8923 12.9855L12.2167 13.3334C12.5333 13.4173 12.8544 13.229 12.9403 12.9151L13.2998 11.5939L14.6211 11.2336C14.9353 11.1481 15.1216 10.825 15.0393 10.5099L14.6922 9.18483L15.6555 8.21071C15.8843 7.97955 15.8843 7.60732 15.6555 7.37575L14.6922 6.4024L15.0401 5.07729C15.1228 4.76221 14.9361 4.43955 14.6218 4.35366L13.3006 3.99339L12.9403 2.67214C12.8544 2.35824 12.5333 2.17037 12.2167 2.25389L10.8916 2.60179L9.91744 1.63849C9.80186 1.52429 9.65087 1.46686 9.49996 1.46686ZM7.87179 13.866L6.22506 14.2982C6.12689 14.3239 6.02892 14.3211 5.93669 14.299V18.2813C5.93669 18.5002 6.05703 18.7018 6.2498 18.8047C6.44257 18.9084 6.6777 18.8968 6.85979 18.7753L9.38941 17.0884C9.4567 17.0444 9.54247 17.044 9.60897 17.0884L12.1394 18.7745C12.2391 18.8414 12.3535 18.875 12.4687 18.875C12.5649 18.875 12.6607 18.8518 12.7486 18.8047C12.9414 18.7018 13.0625 18.5002 13.0625 18.2813V14.299C12.9706 14.3207 12.8723 14.3239 12.7741 14.2982L11.1274 13.866L9.91744 15.062C9.80186 15.1764 9.65 15.2337 9.49919 15.2337C9.34838 15.2337 9.19729 15.176 9.08171 15.062L7.87179 13.866Z" fill="#F59E0B"/>
                                        </svg>
                                    </div>
                                    <div class="info">
                                        <p>Q1 2025 Leadership - Eneo Cameroon</p>
                                        <span>Regional leadership 360° evaluation for first quarter.</span>
                                    </div>
                                </div>
                            </td>

                            <td>
                                <div class="town">
                                    360°
                                </div>
                            </td>

                            <td>3</td>

                            <td>
                                <div class="status draft">
                                    Draft
                                </div>
                            </td>

                            <td>
                                <div class="progress-container">
                                    <div class="progress-bar">
                                        <div class="progress-fill" style="width: 65%;"></div>
                                    </div>
                                    <span>78/120</span>
                                </div>
                            </td>

                            <td>
                                15 Jun 2025
                            </td>

                            <td>
                                <div class="actions">
                                    <button class="view-btn">
                                        View
                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8.35826 3.16602L12.168 6.97572M12.168 6.97572L8.35826 10.7854M12.168 6.97572L2.37158 6.97572" stroke="white" stroke-width="0.653092" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </button>
                                    <button class="edit-btn">
                                        Edit
                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M6.91127 3.16564H4.19005C3.58889 3.16564 3.10156 3.65297 3.10156 4.25412V10.2408C3.10156 10.842 3.58889 11.3293 4.19005 11.3293H10.1767C10.7779 11.3293 11.2652 10.842 11.2652 10.2408V7.51959M10.4955 2.39596C10.9206 1.97088 11.6098 1.97088 12.0349 2.39596C12.46 2.82104 12.46 3.51023 12.0349 3.93531L7.36213 8.60807H5.82278L5.82278 7.06872L10.4955 2.39596Z" stroke="#137699" stroke-width="0.653092" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </button>
                                    <button class="delete-btn" >
                                        Delete
                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M10.608 4.09983L10.136 10.7083C10.0953 11.2779 9.6213 11.7192 9.05023 11.7192H4.54633C3.97527 11.7192 3.5013 11.2779 3.46061 10.7083L2.98858 4.09983M5.7098 6.2768V9.54226M7.88677 6.2768V9.54226M8.43102 4.09983V2.4671C8.43102 2.16652 8.18735 1.92285 7.88677 1.92285H5.7098C5.40922 1.92285 5.16555 2.16652 5.16555 2.4671V4.09983M2.44434 4.09983H11.1522" stroke="#FF383C" stroke-width="0.653092" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <div class="content">
                                    <div class="profile">
                                        <img src="{{asset('images/mtn.png')}}" alt="">
                                    </div>
                                    <div class="info">
                                        <p>MTN Cameroon</p>
                                        <span>Telecommunications</span>
                                    </div>
                                </div>
                            </td>

                             <td>
                                <div class="content">
                                    <div class="survey">
                                        <svg width="19" height="20" viewBox="0 0 19 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9.49996 1.46686C9.34905 1.46686 9.19807 1.52429 9.08248 1.63849L8.10836 2.60179L6.78325 2.25389C6.46777 2.17037 6.14551 2.35824 6.05961 2.67214L5.70012 3.99339L4.37887 4.35366C4.06458 4.43916 3.87828 4.76221 3.96062 5.07729L4.30774 6.4024L3.34445 7.37575C3.11565 7.60692 3.11565 7.97955 3.34445 8.21071L4.30774 9.18483L3.95984 10.5099C3.87711 10.825 4.0638 11.1477 4.3781 11.2336L5.69934 11.5939L6.05961 12.9151C6.14551 13.229 6.46777 13.4169 6.78325 13.3326L8.10836 12.9855L9.08248 13.9488C9.19807 14.0631 9.34992 14.1196 9.50074 14.1196C9.65155 14.1196 9.80263 14.0628 9.91822 13.9488L10.8923 12.9855L12.2167 13.3334C12.5333 13.4173 12.8544 13.229 12.9403 12.9151L13.2998 11.5939L14.6211 11.2336C14.9353 11.1481 15.1216 10.825 15.0393 10.5099L14.6922 9.18483L15.6555 8.21071C15.8843 7.97955 15.8843 7.60732 15.6555 7.37575L14.6922 6.4024L15.0401 5.07729C15.1228 4.76221 14.9361 4.43955 14.6218 4.35366L13.3006 3.99339L12.9403 2.67214C12.8544 2.35824 12.5333 2.17037 12.2167 2.25389L10.8916 2.60179L9.91744 1.63849C9.80186 1.52429 9.65087 1.46686 9.49996 1.46686ZM7.87179 13.866L6.22506 14.2982C6.12689 14.3239 6.02892 14.3211 5.93669 14.299V18.2813C5.93669 18.5002 6.05703 18.7018 6.2498 18.8047C6.44257 18.9084 6.6777 18.8968 6.85979 18.7753L9.38941 17.0884C9.4567 17.0444 9.54247 17.044 9.60897 17.0884L12.1394 18.7745C12.2391 18.8414 12.3535 18.875 12.4687 18.875C12.5649 18.875 12.6607 18.8518 12.7486 18.8047C12.9414 18.7018 13.0625 18.5002 13.0625 18.2813V14.299C12.9706 14.3207 12.8723 14.3239 12.7741 14.2982L11.1274 13.866L9.91744 15.062C9.80186 15.1764 9.65 15.2337 9.49919 15.2337C9.34838 15.2337 9.19729 15.176 9.08171 15.062L7.87179 13.866Z" fill="#F59E0B"/>
                                        </svg>
                                    </div>
                                    <div class="info">
                                        <p>Q1 2025 Leadership - Eneo Cameroon</p>
                                        <span>Regional leadership 360° evaluation for first quarter.</span>
                                    </div>
                                </div>
                            </td>

                            <td>
                                <div class="town">
                                    360°
                                </div>
                            </td>

                            <td>3</td>

                            <td>
                                <div class="status draft">
                                    Draft
                                </div>
                            </td>

                            <td>
                                <div class="progress-container">
                                    <div class="progress-bar">
                                        <div class="progress-fill" style="width: 65%;"></div>
                                    </div>
                                    <span>78/120</span>
                                </div>
                            </td>

                            <td>
                                15 Jun 2025
                            </td>

                            <td>
                                <div class="actions">
                                    <button class="view-btn">
                                        View
                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8.35826 3.16602L12.168 6.97572M12.168 6.97572L8.35826 10.7854M12.168 6.97572L2.37158 6.97572" stroke="white" stroke-width="0.653092" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </button>
                                    <button class="edit-btn">
                                        Edit
                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M6.91127 3.16564H4.19005C3.58889 3.16564 3.10156 3.65297 3.10156 4.25412V10.2408C3.10156 10.842 3.58889 11.3293 4.19005 11.3293H10.1767C10.7779 11.3293 11.2652 10.842 11.2652 10.2408V7.51959M10.4955 2.39596C10.9206 1.97088 11.6098 1.97088 12.0349 2.39596C12.46 2.82104 12.46 3.51023 12.0349 3.93531L7.36213 8.60807H5.82278L5.82278 7.06872L10.4955 2.39596Z" stroke="#137699" stroke-width="0.653092" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </button>
                                    <button class="delete-btn" >
                                        Delete
                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M10.608 4.09983L10.136 10.7083C10.0953 11.2779 9.6213 11.7192 9.05023 11.7192H4.54633C3.97527 11.7192 3.5013 11.2779 3.46061 10.7083L2.98858 4.09983M5.7098 6.2768V9.54226M7.88677 6.2768V9.54226M8.43102 4.09983V2.4671C8.43102 2.16652 8.18735 1.92285 7.88677 1.92285H5.7098C5.40922 1.92285 5.16555 2.16652 5.16555 2.4671V4.09983M2.44434 4.09983H11.1522" stroke="#FF383C" stroke-width="0.653092" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <div class="content">
                                    <div class="profile">
                                        <img src="{{asset('images/mtn.png')}}" alt="">
                                    </div>
                                    <div class="info">
                                        <p>MTN Cameroon</p>
                                        <span>Telecommunications</span>
                                    </div>
                                </div>
                            </td>

                             <td>
                                <div class="content">
                                    <div class="survey">
                                        <svg width="19" height="20" viewBox="0 0 19 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9.49996 1.46686C9.34905 1.46686 9.19807 1.52429 9.08248 1.63849L8.10836 2.60179L6.78325 2.25389C6.46777 2.17037 6.14551 2.35824 6.05961 2.67214L5.70012 3.99339L4.37887 4.35366C4.06458 4.43916 3.87828 4.76221 3.96062 5.07729L4.30774 6.4024L3.34445 7.37575C3.11565 7.60692 3.11565 7.97955 3.34445 8.21071L4.30774 9.18483L3.95984 10.5099C3.87711 10.825 4.0638 11.1477 4.3781 11.2336L5.69934 11.5939L6.05961 12.9151C6.14551 13.229 6.46777 13.4169 6.78325 13.3326L8.10836 12.9855L9.08248 13.9488C9.19807 14.0631 9.34992 14.1196 9.50074 14.1196C9.65155 14.1196 9.80263 14.0628 9.91822 13.9488L10.8923 12.9855L12.2167 13.3334C12.5333 13.4173 12.8544 13.229 12.9403 12.9151L13.2998 11.5939L14.6211 11.2336C14.9353 11.1481 15.1216 10.825 15.0393 10.5099L14.6922 9.18483L15.6555 8.21071C15.8843 7.97955 15.8843 7.60732 15.6555 7.37575L14.6922 6.4024L15.0401 5.07729C15.1228 4.76221 14.9361 4.43955 14.6218 4.35366L13.3006 3.99339L12.9403 2.67214C12.8544 2.35824 12.5333 2.17037 12.2167 2.25389L10.8916 2.60179L9.91744 1.63849C9.80186 1.52429 9.65087 1.46686 9.49996 1.46686ZM7.87179 13.866L6.22506 14.2982C6.12689 14.3239 6.02892 14.3211 5.93669 14.299V18.2813C5.93669 18.5002 6.05703 18.7018 6.2498 18.8047C6.44257 18.9084 6.6777 18.8968 6.85979 18.7753L9.38941 17.0884C9.4567 17.0444 9.54247 17.044 9.60897 17.0884L12.1394 18.7745C12.2391 18.8414 12.3535 18.875 12.4687 18.875C12.5649 18.875 12.6607 18.8518 12.7486 18.8047C12.9414 18.7018 13.0625 18.5002 13.0625 18.2813V14.299C12.9706 14.3207 12.8723 14.3239 12.7741 14.2982L11.1274 13.866L9.91744 15.062C9.80186 15.1764 9.65 15.2337 9.49919 15.2337C9.34838 15.2337 9.19729 15.176 9.08171 15.062L7.87179 13.866Z" fill="#F59E0B"/>
                                        </svg>
                                    </div>
                                    <div class="info">
                                        <p>Q1 2025 Leadership - Eneo Cameroon</p>
                                        <span>Regional leadership 360° evaluation for first quarter.</span>
                                    </div>
                                </div>
                            </td>

                            <td>
                                <div class="town">
                                    360°
                                </div>
                            </td>

                            <td>3</td>

                            <td>
                                <div class="status draft">
                                    Draft
                                </div>
                            </td>

                            <td>
                                <div class="progress-container">
                                    <div class="progress-bar">
                                        <div class="progress-fill" style="width: 65%;"></div>
                                    </div>
                                    <span>78/120</span>
                                </div>
                            </td>

                            <td>
                                15 Jun 2025
                            </td>

                            <td>
                                <div class="actions">
                                    <button class="view-btn">
                                        View
                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8.35826 3.16602L12.168 6.97572M12.168 6.97572L8.35826 10.7854M12.168 6.97572L2.37158 6.97572" stroke="white" stroke-width="0.653092" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </button>
                                    <button class="edit-btn">
                                        Edit
                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M6.91127 3.16564H4.19005C3.58889 3.16564 3.10156 3.65297 3.10156 4.25412V10.2408C3.10156 10.842 3.58889 11.3293 4.19005 11.3293H10.1767C10.7779 11.3293 11.2652 10.842 11.2652 10.2408V7.51959M10.4955 2.39596C10.9206 1.97088 11.6098 1.97088 12.0349 2.39596C12.46 2.82104 12.46 3.51023 12.0349 3.93531L7.36213 8.60807H5.82278L5.82278 7.06872L10.4955 2.39596Z" stroke="#137699" stroke-width="0.653092" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </button>
                                    <button class="delete-btn" >
                                        Delete
                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M10.608 4.09983L10.136 10.7083C10.0953 11.2779 9.6213 11.7192 9.05023 11.7192H4.54633C3.97527 11.7192 3.5013 11.2779 3.46061 10.7083L2.98858 4.09983M5.7098 6.2768V9.54226M7.88677 6.2768V9.54226M8.43102 4.09983V2.4671C8.43102 2.16652 8.18735 1.92285 7.88677 1.92285H5.7098C5.40922 1.92285 5.16555 2.16652 5.16555 2.4671V4.09983M2.44434 4.09983H11.1522" stroke="#FF383C" stroke-width="0.653092" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </button>
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
    </div>


    {{-- modal || create new client --}}
    <div id="myModal" class="modal">
        <form class="modal-content">
            <div class="modal-header">
                <div class="headings">
                    <h2>Create New Client</h2>
                </div>

                <svg width="29" height="30" id="closeModal" class="close" viewBox="0 0 29 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7.25 22.6504L21.75 8.15039M7.25 8.15039L21.75 22.6504" stroke="black" stroke-width="1.45" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </div>

            <div class="info-container">
                <h2>Basic Information</h2>
                <div class="info-content">
                    <div class="company-inputs except">
                        <div class="input except">
                            <label for="">Survey Title *</label>
                            <input type="text">
                        </div>
                        <div class="input except">
                            <label for="">Client *</label>
                            <select name="" id="">
                                <option value="">---select a client---</option>
                                <option value="">MTN</option>
                                <option value="">Orange</option>
                                <option value="">-Iclan</option>
                            </select>
                        </div>

                        <div class="input-container">
                            <div class="input">
                                <label for="">Email *</label>
                                <input type="date">
                            </div>
                            <div class="input">
                                <label for="">Phone *</label>
                                <input type="date">
                            </div>
                        </div>

                        <div class="input">
                            <label for="">Description</label>
                            <textarea name="" id="" cols="30" rows="10" placeholder="Brief description of the survey purpose"></textarea>
                        </div>
                    </div>
                </div>
            </div>

            <div class="info-container">
                <h2>Distribution Method</h2>
                <div class="info-content except">
                    <div class="option-container">
                        <label class="option">
                            <input type="checkbox" checked>
                            Email
                        </label>
                        <label class="option">
                            <input type="checkbox">
                            SMS
                        </label>
                    </div>

                    <!-- Warning box -->
                    <div class="warning">
                        <span class="warning-icon">
                            <svg width="41" height="42" viewBox="0 0 41 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect y="0.803223" width="40.5513" height="40.5513" rx="20.2756" fill="#FEF3C7"/>
                                <path d="M28.4274 25.8169L21.9327 14.085C21.5941 13.4738 20.9749 13.1084 20.276 13.1084C19.5771 13.1084 18.9579 13.4738 18.6194 14.085L12.1246 25.8169C11.7962 26.4105 11.8054 27.1131 12.1502 27.6975C12.4942 28.2815 13.1042 28.6301 13.7817 28.6301H26.7708C27.4479 28.6301 28.0578 28.2815 28.4023 27.6975C28.7462 27.1136 28.7559 26.4105 28.4274 25.8169ZM19.6468 18.3522C19.6468 18.0044 19.9287 17.723 20.276 17.723C20.6234 17.723 20.9053 18.0044 20.9053 18.3522V22.5473C20.9053 22.895 20.6234 23.1765 20.276 23.1765C19.9287 23.1765 19.6468 22.895 19.6468 22.5473V18.3522ZM20.276 26.113C19.8125 26.113 19.437 25.7376 19.437 25.274C19.437 24.8105 19.8125 24.435 20.276 24.435C20.7396 24.435 21.115 24.8105 21.115 25.274C21.115 25.7376 20.7396 26.113 20.276 26.113Z" fill="#F59E0B"/>
                            </svg>
                        </span>
                        Report generation may take 1–3 minutes
                    </div>
                </div>
            </div>

            <div class="info-container">
                <h2>Survey Values & Questions</h2>
                <div class="info-content">
                    <div class="company-inputs except">
                        <div class="label">Select company values to assess and create questions for each value.</div>

                        <!-- Values grid -->
                        <div class="values-grid" id="valuesGrid">
                            <label class="value">
                                <input type="checkbox" checked>
                                <span>Customer Focus</span>
                            </label>
                            <label class="value">
                                <input type="checkbox" checked>
                                <span>Innovation</span>
                            </label>
                            <label class="value">
                                <input type="checkbox">
                                <span>Integrity</span>
                            </label>
                            <label class="value">
                                <input type="checkbox">
                                <span>Teamwork</span>
                            </label>
                            <label class="value">
                                <input type="checkbox">
                                <span>Excellence</span>
                            </label>
                            <label class="value">
                                <input type="checkbox">
                                <span>Accountability</span>
                            </label>
                        </div>

                        <!-- Add another value button -->
                        <button type="button" class="add-btn" onclick="showInput()">Add Another Value</button>

                        <!-- Hidden input field for new value -->
                        <div class="new-value-input" id="newValueInput">
                            <input type="text" id="valueName" placeholder="Enter company value">
                            <button type="button" onclick="saveValue()">Add</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="info-container">
                <h2>Survey Settings</h2>
                <div class="info-content except">
                    <div class="company-inputs except">

                        <div class="input-container">
                            <div class="input">
                                <label for="">Response Anonymity</label>
                                <select name="" id="">
                                    <option value="">---select an anonymity---</option>
                                    <option value="">Anonymous (recommended)</option>
                                    <option value="">Reveal</option>
                                    <option value="">Enclose</option>
                                </select>
                            </div>
                            <div class="input">
                                <label for="">Response Deadline</label>
                                <select name="" id="">
                                    <option value="">---select a deadline---</option>
                                    <option value="">3 days after receiving</option>
                                    <option value="">5 days after receiving</option>
                                    <option value="">1 week after receiving</option>
                                </select>
                            </div>
                        </div>

                        <div class="input-container">
                            <div class="input">
                                <label for="">Reminder Frequency</label>
                                <select name="" id="">
                                    <option value="">---select a frequency---</option>
                                    <option value="">No automatic reminders</option>
                                    <option value="">Daily</option>
                                    <option value="">Weekly</option>
                                </select>
                            </div>
                            <div class="input">
                                <label for="">Completion Reward</label>
                                <select name="" id="">
                                    <option value="">---select a reward---</option>
                                    <option value="">No reward</option>
                                    <option value="">Medal</option>
                                    <option value="">Cash Price</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </form>
    </div>

    {{-- modal || view client details --}}
    <div id="viewCLient" class="modal">
        <form class="modal-content">
            <div class="modal-header">
                <div class="headings">
                    <h2>View Survey Details</h2>
                </div>

                <svg width="29" height="30" id="closeModalClientDetails" class="close" viewBox="0 0 29 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7.25 22.6504L21.75 8.15039M7.25 8.15039L21.75 22.6504" stroke="black" stroke-width="1.45" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </div>

            <div class="company-card">
                <div class="company-header">
                    <img src="{{asset('images/mtn.png')}}" alt="Company Logo" class="company-logo">
                    <div class="company-details">
                        <h2>MTN Cameroon</h2>
                        <p>Telecommunications</p>
                    </div>
                    <span class="status active">● Active</span>
                </div>

                <div class="company-body">
                    <!-- Left Section -->
                    <div class="info-box">
                        <h3>Company Information</h3>
                        <p><strong>Address:</strong> <a href="#">Immeuble MTN, Boulevard de la Liberté, Douala</a></p>
                        <p><strong>Industry:</strong> <a href="#">Telecommunications</a></p>
                        <p><strong>Staff Count:</strong> <a href="#">120 employees</a> <button class="view-btn">View Staff List</button></p>
                        <p><strong>Joined:</strong> <span class="highlight">January 15, 2024</span></p>
                    </div>

                    <!-- Right Section -->
                    <div class="info-box">
                        <h3>Primary Contact</h3>
                        <p><strong>Manager:</strong> <a href="#">Etienne Shey</a></p>
                        <p><strong>Email:</strong> <a href="mailto:etienne.shey@mtn.cm">etienne.shey@mtn.cm</a></p>
                        <p><strong>Phone:</strong> <a href="tel:+237699543210">+237 6 99 54 32 10</a></p>
                        <p><strong>Last Active:</strong> <span class="highlight">May 28, 2025</span></p>
                    </div>
                </div>
            </div>


            <div class="info-container">
                <h2>Company Values</h2>
                <div class="info-content">
                    <div class="survey-list">
                        <div class="survey-item">
                            <div class="survey-info">
                            <strong>Customer Focus</strong>
                            <p>Placing customers at the center of everything we do</p>
                            </div>
                            <span class="badge">5 surveys</span>
                        </div>

                        <div class="survey-item">
                            <div class="survey-info">
                            <strong>Innovation</strong>
                            <p>Encouraging creative thinking and new ideas</p>
                            </div>
                            <span class="badge">3 surveys</span>
                        </div>

                        <div class="survey-item">
                            <div class="survey-info">
                            <strong>Integrity</strong>
                            <p>Doing the right thing, even when no one is watching</p>
                            </div>
                            <span class="badge">4 surveys</span>
                        </div>
                    </div>

                </div>
            </div>

            <div class="info-container">
                <h2>Survey Statistics</h2>
                <div class="info-content except">
                    <div class="chart">
                        <canvas id="comboChart" height="200"></canvas>
                    </div>

                    <div class="stats-container">
                        <div class="stat-card">
                            <div class="stat-title">Highest Response Rate</div>
                            <div class="stat-value">MTN Cameroon</div>
                            <div class="stat-subtext">92% average across 12 surveys</div>
                        </div>
                        <div class="stat-card">
                            <div class="stat-title">Lowest Response Rate</div>
                            <div class="stat-value">Canal+ International</div>
                            <div class="stat-subtext">68% average across 3 surveys</div>
                        </div>
                        <div class="stat-card">
                            <div class="stat-title">Overall Average</div>
                            <div class="stat-value">84.5%</div>
                            <div class="stat-subtext">across all clients and surveys</div>
                        </div>
                    </div>
                </div>
            </div>

        </form>
    </div>

    {{-- modal || edit client --}}
    <div id="editClient" class="modal">
        <form class="modal-content">
            <div class="modal-header">
                <div class="headings">
                    <h2>Edit Client</h2>
                </div>

                <svg width="29" height="30" id="editClientModal" class="close" viewBox="0 0 29 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7.25 22.6504L21.75 8.15039M7.25 8.15039L21.75 22.6504" stroke="black" stroke-width="1.45" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </div>

            <div class="info-container">
                <h2>Basic Information</h2>
                <div class="info-content">
                    <div class="company-logo">
                        <span>Company Logo</span>
                        <label for="fileInput" class="upload-circle" id="uploadCircle">
                            <div class="upload-icon">
                                <svg width="47" height="47" viewBox="0 0 47 47" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g opacity="0.2">
                                        <path d="M20.2137 5.37988C18.6825 5.37988 17.2534 6.20106 16.4825 7.52294L14.3732 11.1397H10.6402C7.19966 11.1397 4.40039 13.939 4.40039 17.3795V35.6189C4.40039 39.0595 7.19966 41.8588 10.6402 41.8588H36.5594C39.9999 41.8588 42.7992 39.0595 42.7992 35.6189V17.3795C42.7992 13.939 39.9999 11.1397 36.5594 11.1397H32.8264L30.7171 7.52294C29.9462 6.20106 28.5171 5.37988 26.9859 5.37988H20.2137ZM23.5998 16.8995C28.3632 16.8995 32.2395 20.7749 32.2395 25.5393C32.2395 30.3036 28.3632 34.179 23.5998 34.179C18.8364 34.179 14.9601 30.3036 14.9601 25.5393C14.9601 20.7749 18.8364 16.8995 23.5998 16.8995ZM23.5998 19.7794C22.0722 19.7794 20.6072 20.3863 19.527 21.4664C18.4468 22.5466 17.84 24.0117 17.84 25.5393C17.84 27.0669 18.4468 28.5319 19.527 29.6121C20.6072 30.6922 22.0722 31.2991 23.5998 31.2991C25.1274 31.2991 26.5924 30.6922 27.6726 29.6121C28.7528 28.5319 29.3596 27.0669 29.3596 25.5393C29.3596 24.0117 28.7528 22.5466 27.6726 21.4664C26.5924 20.3863 25.1274 19.7794 23.5998 19.7794Z" fill="#999999"/>
                                    </g>
                                </svg>
                            </div>
                            <input type="file" id="fileInput" accept="image/*">
                        </label>
                        <div class="upload-text">Please upload a passport-sized photo (4x4)</div>
                    </div>

                    <div class="company-inputs">
                        <div class="input-container">
                            <div class="input">
                                <label for="">Company Name *</label>
                                <input type="text">
                            </div>
                            <div class="input">
                                <label for="">Company Name *</label>
                                <input type="text">
                            </div>
                        </div>

                        <div class="input">
                            <label for="">Company Name *</label>
                            <textarea name="" id="" cols="30" rows="10"></textarea>
                        </div>
                    </div>
                </div>
            </div>

            <div class="info-container">
                <h2>Manager Information</h2>
                <div class="info-content">
                    <div class="company-inputs except">
                        <div class="input-container">
                            <div class="input">
                                <label for="">Full Name *</label>
                                <input type="text">
                            </div>
                            <div class="input">
                                <label for="">Position *</label>
                                <input type="text">
                            </div>
                        </div>

                        <div class="input-container">
                            <div class="input">
                                <label for="">Email *</label>
                                <input type="text">
                            </div>
                            <div class="input">
                                <label for="">Phone *</label>
                                <input type="number">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="info-container">
                <h2>Initial Staff Upload</h2>
                <div class="info-content">
                    <div class="company-inputs except">
                        <div class="file-upload">
                            <label class="upload-btn">
                                <input type="file" id="staffList" hidden onchange="showFileName(this)">
                                <span>
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M3.396 13.096L3.396 13.9117C3.396 15.2633 4.49162 16.3589 5.84314 16.3589L14.0003 16.3589C15.3518 16.3589 16.4474 15.2633 16.4474 13.9117L16.4474 13.096M13.1846 6.5703L9.92172 3.30744M9.92172 3.30744L6.65886 6.5703M9.92172 3.30744L9.92172 13.096" stroke="#666666" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    Upload Staff List
                                </span>
                            </label>
                            <span id="fileName">No file selected</span>
                        </div>

                        <div class="download-template">
                            <a href="#" download>
                                Download Excel Template
                                <svg width="14" height="15" viewBox="0 0 14 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6.87598 10.125L6.47081 10.5302L6.87598 10.9353L7.28115 10.5302L6.87598 10.125ZM7.44897 3.24902C7.44897 2.93257 7.19243 2.67603 6.87598 2.67603C6.55952 2.67603 6.30298 2.93257 6.30298 3.24902L6.87598 3.24902L7.44897 3.24902ZM3.43799 6.68701L3.03282 7.09218L6.47081 10.5302L6.87598 10.125L7.28115 9.71983L3.84316 6.28184L3.43799 6.68701ZM6.87598 10.125L7.28115 10.5302L10.7191 7.09218L10.314 6.68701L9.90879 6.28184L6.47081 9.71983L6.87598 10.125ZM6.87598 10.125L7.44897 10.125L7.44897 3.24902L6.87598 3.24902L6.30298 3.24902L6.30298 10.125L6.87598 10.125Z" fill="#AF720A"/>
                                    <path d="M2.86523 12.9902L10.8872 12.9902" stroke="#AF720A" stroke-width="1.146"/>
                                </svg>
                            </a>
                        </div>

                        <div class="active-client">
                            <input type="checkbox" id="activeClient" checked>
                            <div>
                                <span>Set as Active Client</span>
                                <p>Active clients can receive surveys and access their reports.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="info-container">
                <h2>Company Values</h2>
                <div class="info-content">
                    <div class="company-inputs except">
                       <div class="customer-block">
                            <div class="inputs">
                                <input type="text" class="title-input" value="Customer Focus">
                                <textarea class="desc-input">Placing customers at the center of everything we do</textarea>
                            </div>
                            <button class="delete-btn" onclick="deleteBlock(this)">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15.6072 6.32799L14.9124 16.054C14.8526 16.8924 14.155 17.5419 13.3145 17.5419H6.6859C5.84544 17.5419 5.14787 16.8924 5.08799 16.054L4.39328 6.32799M8.39823 9.53196V14.3379M11.6022 9.53196V14.3379M12.4032 6.32799V3.92501C12.4032 3.48264 12.0446 3.12402 11.6022 3.12402H8.39823C7.95586 3.12402 7.59724 3.48264 7.59724 3.92501V6.32799M3.59229 6.32799H16.4081" stroke="#FF383C" stroke-width="0.96119" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </button>
                        </div>

                        <div class="customer-block">
                            <div class="inputs">
                                <input type="text" class="title-input" value="Customer Focus">
                                <textarea class="desc-input">Placing customers at the center of everything we do</textarea>
                            </div>
                            <button class="delete-btn" onclick="deleteBlock(this)">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15.6072 6.32799L14.9124 16.054C14.8526 16.8924 14.155 17.5419 13.3145 17.5419H6.6859C5.84544 17.5419 5.14787 16.8924 5.08799 16.054L4.39328 6.32799M8.39823 9.53196V14.3379M11.6022 9.53196V14.3379M12.4032 6.32799V3.92501C12.4032 3.48264 12.0446 3.12402 11.6022 3.12402H8.39823C7.95586 3.12402 7.59724 3.48264 7.59724 3.92501V6.32799M3.59229 6.32799H16.4081" stroke="#FF383C" stroke-width="0.96119" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </button>
                        </div>

                        <div class="customer-block">
                            <div class="inputs">
                                <input type="text" class="title-input" value="Customer Focus">
                                <textarea class="desc-input">Placing customers at the center of everything we do</textarea>
                            </div>
                            <button class="delete-btn" onclick="deleteBlock(this)">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15.6072 6.32799L14.9124 16.054C14.8526 16.8924 14.155 17.5419 13.3145 17.5419H6.6859C5.84544 17.5419 5.14787 16.8924 5.08799 16.054L4.39328 6.32799M8.39823 9.53196V14.3379M11.6022 9.53196V14.3379M12.4032 6.32799V3.92501C12.4032 3.48264 12.0446 3.12402 11.6022 3.12402H8.39823C7.95586 3.12402 7.59724 3.48264 7.59724 3.92501V6.32799M3.59229 6.32799H16.4081" stroke="#FF383C" stroke-width="0.96119" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </button>
                        </div>

                        <div class="customer-block">
                            <div class="inputs">
                                <input type="text" class="title-input" value="Customer Focus">
                                <textarea class="desc-input">Placing customers at the center of everything we do</textarea>
                            </div>
                            <button class="delete-btn" onclick="deleteBlock(this)">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15.6072 6.32799L14.9124 16.054C14.8526 16.8924 14.155 17.5419 13.3145 17.5419H6.6859C5.84544 17.5419 5.14787 16.8924 5.08799 16.054L4.39328 6.32799M8.39823 9.53196V14.3379M11.6022 9.53196V14.3379M12.4032 6.32799V3.92501C12.4032 3.48264 12.0446 3.12402 11.6022 3.12402H8.39823C7.95586 3.12402 7.59724 3.48264 7.59724 3.92501V6.32799M3.59229 6.32799H16.4081" stroke="#FF383C" stroke-width="0.96119" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

        </form>
    </div>

    {{-- modal || delete client --}}
    <div id="deleteClient" class="modal">
        <form class="modal-content except">
            <div class="modal-header except">
                <div class="headings">
                    <h2>Delete Survey</h2>
                    <p>Are you sure you want to remove this survey from the survey's list?</p>
                </div>

                <svg width="29" height="30" id="deleteClientModal" class="close" viewBox="0 0 29 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7.25 22.6504L21.75 8.15039M7.25 8.15039L21.75 22.6504" stroke="black" stroke-width="1.45" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </div>

            <div class="warning-box">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10
                    10-4.48 10-10S17.52 2 12 2zm0
                    15h-1v-1h1v1zm0-3h-1V7h1v7z"/>
                </svg>
                <p>
                    Are you sure you want to delete this survey? All of the data will be permanently removed. This action cannot be undone.
                </p>
            </div>

            <div class="button-group">
                <button class="btn btn-cancel">Cancel</button>
                <button class="btn btn-remove">
                    Remove
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path d="M3 6h18v2H3V6zm2 3h14l-1.5
                        12.5c-.1.8-.8 1.5-1.6 1.5H8.1c-.8
                        0-1.5-.7-1.6-1.5L5 9zm5-5V2h4v2h5v2H5V4h5z"/>
                    </svg>
                </button>
            </div>

        </form>
    </div>


@endsection
