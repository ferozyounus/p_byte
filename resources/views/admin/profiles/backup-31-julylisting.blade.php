@extends('layouts.dashboard.main')

@section('content')


<!--Page header-->
<div class="page-header">
    <div class="page-leftheader">
        <h4 class="page-title mb-0">Free Career Form</h4>
        <ol class="breadcrumb">
            {{-- <li class=""><a href="{{route('members.create')}}" class="btn btn-primary">Add New Member </a></li> --}}
            {{-- <li class="ml-3"><a href="#" class="btn btn-info"><i class="fe fe-filter mr-1"></i>Filter </a></li> --}}
            {{-- <li class="breadcrumb-item active" aria-current="page"><a href="#"> {{ $page_title }}</a></li> --}}
        </ol>
    </div>
    <div class="page-rightheader">
        <div class="">
        </div>

    </div>
</div>
<!--End Page header-->

{{-- <div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="card-title">Career Test Form</div>
            </div>
            <!-- modal trigger -->
            <div>
                <a data-target="#careerformModal" data-toggle="modal" class="btn btn-primary"> Add Education Experience </a>
            </div>
        </div>
        <!--/div-->
    </div>
</div>
<!-- /Row --> --}}



{{-- <div id="careerformModal" class="modal fade"> --}}
<div id="careerformModal">
    <div class="" role="document">
    {{-- <div class="modal-dialog modal-sm" role="document"> --}}
        <div class="modal-content">
            <div class="modal-body">


                <div class="career-form">
                    <h1>Career <span>Test</span></h1>
                    <p>This is the first page of our 5-step online career test. Most visitors complete the test in 5 to 10 minutes. When you're done, we'll provide you recommendations for great new careers that best match your answers. Have fun!</p>
                    <form id="careerTestForm">
                        <!-- progressbar -->
                        <ul id="progressbar">
                            <li class="active">Step 1</li>
                            <li>Step 2</li>
                            <li>Step 3</li>
                            <li>Step 4</>
                            <li>Step 5</>
                        </ul>
                        <!-- progressbar -->

                        <!-- fieldsets 1 -->
                        <div>
                            <fieldset>
                                <div class="form-card">
                                    <h2>Step 1 of 5: SKILLS</h2>
                                    <h6>Rate your skill level for the following attributes:</h6>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th></th>
                                                    <th scope="col">Low</th>
                                                    <th scope="col">Below Average</th>
                                                    <th scope="col">Average</th>
                                                    <th scope="col">Above Average</th>
                                                    <th scope="col">High</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th><b>Logic:</b> reasoning and problem solving</th>
                                                    <td><input type="radio" name="step-one-logic" value="low"></td>
                                                    <td><input type="radio" name="step-one-logic" value="below-average"></td>
                                                    <td><input type="radio" name="step-one-logic" value="average"></td>
                                                    <td><input type="radio" name="step-one-logic" value="above-average"></td>
                                                    <td><input type="radio" name="step-one-logic" value="high"></td>

                                                </tr>
                                                <tr>
                                                    <th><b>Management:</b> planning, proper use of time and resources</th>
                                                    <td><input type="radio" name="step-one-management" value="low"></td>
                                                    <td><input type="radio" name="step-one-management" value="below-average"></td>
                                                    <td><input type="radio" name="step-one-management" value="average"></td>
                                                    <td><input type="radio" name="step-one-management" value="above-average"></td>
                                                    <td><input type="radio" name="step-one-management" value="high"></td>
                                                </tr>
                                                <tr>
                                                    <th><b>People:</b> interaction with others, ability to train and counsel</th>
                                                    <td><input type="radio" name="step-one-people" value="low"></td>
                                                    <td><input type="radio" name="step-one-people" value="below-average"></td>
                                                    <td><input type="radio" name="step-one-people" value="average"></td>
                                                    <td><input type="radio" name="step-one-people" value="above-average"></td>
                                                    <td><input type="radio" name="step-one-people" value="high"></td>
                                                </tr>
                                                <tr>
                                                    <th><b>Mechanical:</b> working with tools and equipment</th>
                                                    <td><input type="radio" name="step-one-mechanical" value="low"></td>
                                                    <td><input type="radio" name="step-one-mechanical" value="below-average"></td>
                                                    <td><input type="radio" name="step-one-mechanical" value="average"></td>
                                                    <td><input type="radio" name="step-one-mechanical" value="above-average"></td>
                                                    <td><input type="radio" name="step-one-mechanical" value="high"></td>
                                                </tr>
                                                <tr>
                                                    <th><b>Communication:</b> listening, speaking and working with others</th>
                                                    <td><input type="radio" name="step-one-communication" value="low"></td>
                                                    <td><input type="radio" name="step-one-communication" value="below-average"></td>
                                                    <td><input type="radio" name="step-one-communication" value="average"></td>
                                                    <td><input type="radio" name="step-one-communication" value="above-average"></td>
                                                    <td><input type="radio" name="step-one-communication" value="high"></td>
                                                </tr>
                                                <tr>
                                                    <th><b>Judgment:</b> making clear, decisive decisions</th>
                                                    <td><input type="radio" name="step-one-judgment" value="low"></td>
                                                    <td><input type="radio" name="step-one-judgment" value="below-average"></td>
                                                    <td><input type="radio" name="step-one-judgment" value="average"></td>
                                                    <td><input type="radio" name="step-one-judgment" value="above-average"></td>
                                                    <td><input type="radio" name="step-one-judgment" value="high"></td>
                                                </tr>
                                                <tr>
                                                    <th><b>Attention:</b> focus on the problem at hand</th>
                                                    <td><input type="radio" name="step-one-attention" value="low"></td>
                                                    <td><input type="radio" name="step-one-attention" value="below-average"></td>
                                                    <td><input type="radio" name="step-one-attention" value="average"></td>
                                                    <td><input type="radio" name="step-one-attention" value="above-average"></td>
                                                    <td><input type="radio" name="step-one-attention" value="high"></td>
                                                </tr>
                                                <tr>
                                                    <th><b>Thinking:</b> working with new ideas and creative thinking</th>
                                                    <td><input type="radio" name="step-one-thinking" value="low"></td>
                                                    <td><input type="radio" name="step-one-thinking" value="below-average"></td>
                                                    <td><input type="radio" name="step-one-thinking" value="average"></td>
                                                    <td><input type="radio" name="step-one-thinking" value="above-average"></td>
                                                    <td><input type="radio" name="step-one-thinking" value="high"></td>
                                                </tr>
                                                <tr>
                                                    <th><b>Physical:</b> strenth, agility and dexterity</th>
                                                    <td><input type="radio" name="step-one-physical" value="low"></td>
                                                    <td><input type="radio" name="step-one-physical" value="below-average"></td>
                                                    <td><input type="radio" name="step-one-physical" value="average"></td>
                                                    <td><input type="radio" name="step-one-physical" value="above-average"></td>
                                                    <td><input type="radio" name="step-one-physical" value="high"></td>
                                                </tr>
                                                <tr>
                                                    <th><b>Senses:</b> eyesight and hearing</th>
                                                    <td><input type="radio" name="step-one-senses" value="low"></td>
                                                    <td><input type="radio" name="step-one-senses" value="below-average"></td>
                                                    <td><input type="radio" name="step-one-senses" value="average"></td>
                                                    <td><input type="radio" name="step-one-senses" value="above-average"></td>
                                                    <td><input type="radio" name="step-one-senses" value="high"></td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="form-footer">
                                    <input type="button" name="next" class="next action-button" value="Continue to Step 2" />
                                </div>
                            </fieldset>
                            <!-- fieldsets 1 -->

                            <!-- fieldsets 2 -->
                            <fieldset>
                                <div class="form-card">
                                    <h2>Step 2 of 5: Interests</h2>
                                    <h6>Rate your interests level for the following subjects and activities:</h6>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th></th>
                                                    <th scope="col">None</th>
                                                    <th scope="col">Low</th>
                                                    <th scope="col">Medium</th>
                                                    <th scope="col">High</th>
                                                    <th scope="col">Very High</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th><b>Art:</b> painting, drawing and sculpture</th>
                                                    <td><input type="radio" name="step-two-art" value="none"></td>
                                                    <td><input type="radio" name="step-two-art" value="low"></td>
                                                    <td><input type="radio" name="step-two-art" value="medium"></td>
                                                    <td><input type="radio" name="step-two-art" value="high"></td>
                                                    <td><input type="radio" name="step-two-art" value="very-high"></td>
                                                </tr>
                                                <tr>
                                                    <th><b>Business:</b> economics, finance and marketing</th>
                                                    <td><input type="radio" name="step-two-business" value="none"></td>
                                                    <td><input type="radio" name="step-two-business" value="low"></td>
                                                    <td><input type="radio" name="step-two-business" value="medium"></td>
                                                    <td><input type="radio" name="step-two-business" value="high"></td>
                                                    <td><input type="radio" name="step-two-business" value="very-high"></td>
                                                </tr>
                                                <tr>
                                                    <th><b>Law:</b> legal and criminal justice</th>
                                                    <td><input type="radio" name="step-two-law" value="none"></td>
                                                    <td><input type="radio" name="step-two-law" value="low"></td>
                                                    <td><input type="radio" name="step-two-law" value="medium"></td>
                                                    <td><input type="radio" name="step-two-law" value="high"></td>
                                                    <td><input type="radio" name="step-two-law" value="very-high"></td>
                                                </tr>
                                                <tr>
                                                    <th><b>Computers:</b> programming and information technology</th>
                                                    <td><input type="radio" name="step-two-computers" value="none"></td>
                                                    <td><input type="radio" name="step-two-computers" value="low"></td>
                                                    <td><input type="radio" name="step-two-computers" value="medium"></td>
                                                    <td><input type="radio" name="step-two-computers" value="high"></td>
                                                    <td><input type="radio" name="step-two-computers" value="very-high"></td>
                                                </tr>
                                                <tr>
                                                    <th><b>Science:</b> math, physics and technology</th>
                                                    <td><input type="radio" name="step-two-science" value="none"></td>
                                                    <td><input type="radio" name="step-two-science" value="low"></td>
                                                    <td><input type="radio" name="step-two-science" value="medium"></td>
                                                    <td><input type="radio" name="step-two-science" value="high"></td>
                                                    <td><input type="radio" name="step-two-science" value="very-high"></td>
                                                </tr>
                                                <tr>
                                                    <th><b>Medical:</b> biology and health care</th>
                                                    <td><input type="radio" name="step-two-medical" value="none"></td>
                                                    <td><input type="radio" name="step-two-medical" value="low"></td>
                                                    <td><input type="radio" name="step-two-medical" value="medium"></td>
                                                    <td><input type="radio" name="step-two-medical" value="high"></td>
                                                    <td><input type="radio" name="step-two-medical" value="very-high"></td>
                                                </tr>
                                                <tr>
                                                    <th><b>Culinary:</b> food and drinks</th>
                                                    <td><input type="radio" name="step-two-culinary" value="none"></td>
                                                    <td><input type="radio" name="step-two-culinary" value="low"></td>
                                                    <td><input type="radio" name="step-two-culinary" value="medium"></td>
                                                    <td><input type="radio" name="step-two-culinary" value="high"></td>
                                                    <td><input type="radio" name="step-two-culinary" value="very-high"></td>
                                                </tr>
                                                <tr>
                                                    <th><b>Construction:</b> working with your hands</th>
                                                    <td><input type="radio" name="step-two-construction" value="none"></td>
                                                    <td><input type="radio" name="step-two-construction" value="low"></td>
                                                    <td><input type="radio" name="step-two-construction" value="medium"></td>
                                                    <td><input type="radio" name="step-two-construction" value="high"></td>
                                                    <td><input type="radio" name="step-two-construction" value="very-high"></td>
                                                </tr>
                                                <tr>
                                                    <th><b>Office:</b> working in an office environment</th>
                                                    <td><input type="radio" name="step-two-office" value="none"></td>
                                                    <td><input type="radio" name="step-two-office" value="low"></td>
                                                    <td><input type="radio" name="step-two-office" value="medium"></td>
                                                    <td><input type="radio" name="step-two-office" value="high"></td>
                                                    <td><input type="radio" name="step-two-office" value="very-high"></td>
                                                </tr>
                                                <tr>
                                                    <th><b>Outdoors:</b> working outside of an office</th>
                                                    <td><input type="radio" name="step-two-outdoors" value="none"></td>
                                                    <td><input type="radio" name="step-two-outdoors" value="low"></td>
                                                    <td><input type="radio" name="step-two-outdoors" value="medium"></td>
                                                    <td><input type="radio" name="step-two-outdoors" value="high"></td>
                                                    <td><input type="radio" name="step-two-outdoors" value="very-high"></td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="form-footer">
                                    <input type="button" name="next" class="next action-button" value="Continue to Step 3" />
                                </div>
                            </fieldset>
                            <!-- fieldsets 2 -->

                            <!-- fieldsets 3 -->
                            <fieldset>
                                <div class="form-card">
                                    <h2>Step 3 of 5: Work Style</h2>
                                    <h6>Rate how closely each style of work matches your own personality:</h6>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th></th>
                                                    <th scope="col">None</th>
                                                    <th scope="col">Low</th>
                                                    <th scope="col">Medium</th>
                                                    <th scope="col">High</th>
                                                    <th scope="col">Very High</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th><b>Attention to Detail:</b> careful about detail and thorough in completing work tasks</th>
                                                    <td><input type="radio" name="step-three-attention" value="none"></td>
                                                    <td><input type="radio" name="step-three-attention" value="low"></td>
                                                    <td><input type="radio" name="step-three-attention" value="medium"></td>
                                                    <td><input type="radio" name="step-three-attention" value="high"></td>
                                                    <td><input type="radio" name="step-three-attention" value="very-high"></td>
                                                </tr>
                                                <tr>
                                                    <th><b>Integrity:</b> being honest and ethical</th>
                                                    <td><input type="radio" name="step-three-integrity" value="none"></td>
                                                    <td><input type="radio" name="step-three-integrity" value="low"></td>
                                                    <td><input type="radio" name="step-three-integrity" value="medium"></td>
                                                    <td><input type="radio" name="step-three-integrity" value="high"></td>
                                                    <td><input type="radio" name="step-three-integrity" value="very-high"></td>
                                                </tr>
                                                <tr>
                                                    <th><b>Initiative:</b> taking on responsibilities and challenges</th>
                                                    <td><input type="radio" name="step-three-initiative" value="none"></td>
                                                    <td><input type="radio" name="step-three-initiative" value="low"></td>
                                                    <td><input type="radio" name="step-three-initiative" value="medium"></td>
                                                    <td><input type="radio" name="step-three-initiative" value="high"></td>
                                                    <td><input type="radio" name="step-three-initiative" value="very-high"></td>
                                                </tr>
                                                <tr>
                                                    <th><b>Dependability:</b> reliable, responsible, and dependable</th>
                                                    <td><input type="radio" name="step-three-dependability" value="none"></td>
                                                    <td><input type="radio" name="step-three-dependability" value="low"></td>
                                                    <td><input type="radio" name="step-three-dependability" value="medium"></td>
                                                    <td><input type="radio" name="step-three-dependability" value="high"></td>
                                                    <td><input type="radio" name="step-three-dependability" value="very-high"></td>
                                                </tr>
                                                <tr>
                                                    <th><b>Persistence:</b> not giving up in the face of obstacles</th>
                                                    <td><input type="radio" name="step-three-persistence" value="none"></td>
                                                    <td><input type="radio" name="step-three-persistence" value="low"></td>
                                                    <td><input type="radio" name="step-three-persistence" value="medium"></td>
                                                    <td><input type="radio" name="step-three-persistence" value="high"></td>
                                                    <td><input type="radio" name="step-three-persistence" value="very-high"></td>
                                                </tr>
                                                <tr>
                                                    <th><b>Cooperation:</b> being pleasant with others and displaying a good-natured, cooperative attitude</th>
                                                    <td><input type="radio" name="step-three-cooperation" value="none"></td>
                                                    <td><input type="radio" name="step-three-cooperation" value="low"></td>
                                                    <td><input type="radio" name="step-three-cooperation" value="medium"></td>
                                                    <td><input type="radio" name="step-three-cooperation" value="high"></td>
                                                    <td><input type="radio" name="step-three-cooperation" value="very-high"></td>
                                                </tr>
                                                <tr>
                                                    <th><b>Achievement:</b> maintaining personally challenging goals and exerting effort towards achieving them</th>
                                                    <td><input type="radio" name="step-three-achievement" value="none"></td>
                                                    <td><input type="radio" name="step-three-achievement" value="low"></td>
                                                    <td><input type="radio" name="step-three-achievement" value="medium"></td>
                                                    <td><input type="radio" name="step-three-achievement" value="high"></td>
                                                    <td><input type="radio" name="step-three-achievement" value="very-high"></td>
                                                </tr>
                                                <tr>
                                                    <th><b>Adaptability:</b> open to change (positive or negative) and to considerable variety in the workplace</th>
                                                    <td><input type="radio" name="step-three-adaptability" value="none"></td>
                                                    <td><input type="radio" name="step-three-adaptability" value="low"></td>
                                                    <td><input type="radio" name="step-three-adaptability" value="medium"></td>
                                                    <td><input type="radio" name="step-three-adaptability" value="high"></td>
                                                    <td><input type="radio" name="step-three-adaptability" value="very-high"></td>
                                                </tr>
                                                <tr>
                                                    <th><b>Leadership:</b> willingness to lead, take charge, and offer opinions and direction</th>
                                                    <td><input type="radio" name="step-three-leadership" value="none"></td>
                                                    <td><input type="radio" name="step-three-leadership" value="low"></td>
                                                    <td><input type="radio" name="step-three-leadership" value="medium"></td>
                                                    <td><input type="radio" name="step-three-leadership" value="high"></td>
                                                    <td><input type="radio" name="step-three-leadership" value="very-high"></td>
                                                </tr>
                                                <tr>
                                                    <th><b>Analytical Thinking:</b> analyzing information and using logic to address issues and problems</th>
                                                    <td><input type="radio" name="step-three-analytical" value="none"></td>
                                                    <td><input type="radio" name="step-three-analytical" value="low"></td>
                                                    <td><input type="radio" name="step-three-analytical" value="medium"></td>
                                                    <td><input type="radio" name="step-three-analytical" value="high"></td>
                                                    <td><input type="radio" name="step-three-analytical" value="very-high"></td>
                                                </tr>
                                                <tr>
                                                    <th><b>Independence:</b> completing tasks with little or no supervision</th>
                                                    <td><input type="radio" name="step-three-independence" value="none"></td>
                                                    <td><input type="radio" name="step-three-independence" value="low"></td>
                                                    <td><input type="radio" name="step-three-independence" value="medium"></td>
                                                    <td><input type="radio" name="step-three-independence" value="high"></td>
                                                    <td><input type="radio" name="step-three-independence" value="very-high"></td>
                                                </tr>
                                                <tr>
                                                    <th><b>Stress Tolerance:</b> accepting criticism and dealing calmly and effectively with high stress situations</th>
                                                    <td><input type="radio" name="step-three-tolerance" value="none"></td>
                                                    <td><input type="radio" name="step-three-tolerance" value="low"></td>
                                                    <td><input type="radio" name="step-three-tolerance" value="medium"></td>
                                                    <td><input type="radio" name="step-three-tolerance" value="high"></td>
                                                    <td><input type="radio" name="step-three-tolerance" value="very-high"></td>
                                                </tr>
                                                <tr>
                                                    <th><b>Innovation:</b> using creativity and alternative thinking to develop new ideas</th>
                                                    <td><input type="radio" name="step-three-innovation" value="none"></td>
                                                    <td><input type="radio" name="step-three-innovation" value="low"></td>
                                                    <td><input type="radio" name="step-three-innovation" value="medium"></td>
                                                    <td><input type="radio" name="step-three-innovation" value="high"></td>
                                                    <td><input type="radio" name="step-three-innovation" value="very-high"></td>
                                                </tr>
                                                <tr>
                                                    <th><b>Self Control:</b> keeping emotions in check, controlling anger, and avoiding aggressive behavior</th>
                                                    <td><input type="radio" name="step-three-control" value="none"></td>
                                                    <td><input type="radio" name="step-three-control" value="low"></td>
                                                    <td><input type="radio" name="step-three-control" value="medium"></td>
                                                    <td><input type="radio" name="step-three-control" value="high"></td>
                                                    <td><input type="radio" name="step-three-control" value="very-high"></td>
                                                </tr>
                                                <tr>
                                                    <th><b>Concern for Others:</b> being sensitive to others' needs and feelings</th>
                                                    <td><input type="radio" name="step-three-concern" value="none"></td>
                                                    <td><input type="radio" name="step-three-concern" value="low"></td>
                                                    <td><input type="radio" name="step-three-concern" value="medium"></td>
                                                    <td><input type="radio" name="step-three-concern" value="high"></td>
                                                    <td><input type="radio" name="step-three-concern" value="very-high"></td>
                                                </tr>
                                                <tr>
                                                    <th><b>Sociability:</b> preferring to work with others rather than alone</th>
                                                    <td><input type="radio" name="step-three-sociability" value="none"></td>
                                                    <td><input type="radio" name="step-three-sociability" value="low"></td>
                                                    <td><input type="radio" name="step-three-sociability" value="medium"></td>
                                                    <td><input type="radio" name="step-three-sociability" value="high"></td>
                                                    <td><input type="radio" name="step-three-sociability" value="very-high"></td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="form-footer">
                                    <input type="button" name="next" class="next action-button" value="Continue to Step 4" />
                                </div>
                            </fieldset>
                            <!-- fieldsets 3 -->

                            <!-- fieldsets 4 -->
                            <fieldset>
                                <div class="form-card">
                                    <h2>Step 4 of 5: Values</h2>
                                    <h6>Rate how important each of these values are to you in your ideal career:</h6>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th></th>
                                                    <th scope="col">Not At All</th>
                                                    <th scope="col">Not Very</th>
                                                    <th scope="col">Somewhat</th>
                                                    <th scope="col">Important</th>
                                                    <th scope="col">Very Important</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th><b>Support:</b> management that stands behind employees</th>
                                                    <td><input type="radio" name="step-four-support" value="not-at-all"></td>
                                                    <td><input type="radio" name="step-four-support" value="not-very"></td>
                                                    <td><input type="radio" name="step-four-support" value="somewhat"></td>
                                                    <td><input type="radio" name="step-four-support" value="important"></td>
                                                    <td><input type="radio" name="step-four-support" value="very-important"></td>
                                                </tr>
                                                <tr>
                                                    <th><b>Working Conditions:</b> job security and good working conditions</th>
                                                    <td><input type="radio" name="step-four-conditions" value="not-at-all"></td>
                                                    <td><input type="radio" name="step-four-conditions" value="not-very"></td>
                                                    <td><input type="radio" name="step-four-conditions" value="somewhat"></td>
                                                    <td><input type="radio" name="step-four-conditions" value="important"></td>
                                                    <td><input type="radio" name="step-four-conditions" value="very-important"></td>
                                                </tr>
                                                <tr>
                                                    <th><b>Achievement:</b> results oriented and allows employees to use their strongest abilities, giving them a feeling of accomplishment</th>
                                                    <td><input type="radio" name="step-four-achievement" value="not-at-all"></td>
                                                    <td><input type="radio" name="step-four-achievement" value="not-very"></td>
                                                    <td><input type="radio" name="step-four-achievement" value="somewhat"></td>
                                                    <td><input type="radio" name="step-four-achievement" value="important"></td>
                                                    <td><input type="radio" name="step-four-achievement" value="very-important"></td>
                                                </tr>
                                                <tr>
                                                    <th><b>Independence:</b> employees allowed to work on their own and make decisions</th>
                                                    <td><input type="radio" name="step-four-independence" value="not-at-all"></td>
                                                    <td><input type="radio" name="step-four-independence" value="not-very"></td>
                                                    <td><input type="radio" name="step-four-independence" value="somewhat"></td>
                                                    <td><input type="radio" name="step-four-independence" value="important"></td>
                                                    <td><input type="radio" name="step-four-independence" value="very-important"></td>
                                                </tr>
                                                <tr>
                                                    <th><b>Recognition:</b> potential for advancement and a role in leadership</th>
                                                    <td><input type="radio" name="step-four-recognition" value="not-at-all"></td>
                                                    <td><input type="radio" name="step-four-recognition" value="not-very"></td>
                                                    <td><input type="radio" name="step-four-recognition" value="somewhat"></td>
                                                    <td><input type="radio" name="step-four-recognition" value="important"></td>
                                                    <td><input type="radio" name="step-four-recognition" value="very-important"></td>
                                                </tr>
                                                <tr>
                                                    <th><b>Relationships:</b> employees provide service to others and work with co-workers in a friendly non-competitive environment</th>
                                                    <td><input type="radio" name="step-four-relationships" value="not-at-all"></td>
                                                    <td><input type="radio" name="step-four-relationships" value="not-very"></td>
                                                    <td><input type="radio" name="step-four-relationships" value="somewhat"></td>
                                                    <td><input type="radio" name="step-four-relationships" value="important"></td>
                                                    <td><input type="radio" name="step-four-relationships" value="very-important"></td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="form-footer">
                                    <input type="button" name="next" class="next action-button" value="Continue to Step 5" />
                                </div>
                            </fieldset>
                            <!-- fieldsets 4 -->

                            <!-- fieldsets 5 -->
                            <fieldset>
                                <div class="form-card">
                                    <h2>Step 5 of 5: Requirements</h2>
                                    <div class="last-step">
                                        <div class="requirements">
                                            <h4>What is the minimum salary are you looking for in a career?</h4>
                                            <select name="step-five-salary">
                                                <option value="doesn't-matter">Doesn't Matter</option>
                                                <option value="doesn't-matter">Doesn't Matter</option>
                                                <option value="doesn't-matter">Doesn't Matter</option>
                                            </select>
                                        </div>
                                        <div class="requirements">
                                            <h4>What is the minimum salary are you looking for in a career?</h4>
                                            <select name="step-five-salary">
                                                <option value="doesn't-matter">Doesn't Matter</option>
                                                <option value="doesn't-matter">Doesn't Matter</option>
                                                <option value="doesn't-matter">Doesn't Matter</option>
                                            </select>
                                        </div>
                                        <div class="requirements">
                                            <h4>What is the minimum salary are you looking for in a career?</h4>
                                            <select name="step-five-salary">
                                                <option value="doesn't-matter">Doesn't Matter</option>
                                                <option value="doesn't-matter">Doesn't Matter</option>
                                                <option value="doesn't-matter">Doesn't Matter</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-footer">
                                    <input type="button" name="next" class="next action-button" value="Submit" />
                                </div>
                            </fieldset>
                            <!-- fieldsets 5 -->
                        </div>
                    </form>

                </div>

            </div>
        </div>
    </div>
</div>

<style>
    div#careerformModal .modal-sm {
        max-width: 80% !important;
    }

    .career-form {
        width: 95%;
        margin: 50px auto;
    }

    .career-form h1 {
        text-align: center;
        font-size: 50px;
        font-family: 'Roboto';
        font-weight: bold;
        line-height: 1.5;
    }

    .career-form h1 span {
        background-color: #4A8B8C;
        padding: 0 5px;
        color: #fff;
        border-radius: 5px;
    }

    .career-form p {
        text-align: center;
        font-size: 20px;
        width: 80%;
        margin: auto;
    }

    #careerTestForm ul#progressbar {
        display: flex;
        justify-content: space-evenly;
        align-items: center;
        margin: 50px 0;
        overflow: hidden;
        counter-reset: count;
        width: 60%;
        margin-left: auto;
        margin-right: auto;
    }

    #careerTestForm ul#progressbar .active {
        color: #4A8B8C;
    }

    #careerTestForm ul#progressbar li {
        font-size: 20px;
        position: relative;
        font-weight: bold;
        font-family: 'roboto';
        color: #6F717F;
        width: 100%;
        text-align: center;
    }

    #careerTestForm ul#progressbar li:before {
        counter-increment: count;
        content: "" counter(count) " ";
    }

    #careerTestForm ul#progressbar li:before {
        width: 45px;
        height: 45px;
        display: block;
        font-size: 20px;
        color: #ffffff;
        background: #6F717F;
        border-radius: 50%;
        margin: 0 auto 10px auto;
        padding: 2px;
        box-shadow: 0px 3px 6px #00000029;
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 1;
        position: relative;
    }

    #careerTestForm ul#progressbar li:after {
        content: '';
        width: 100%;
        height: 2px;
        background: #6f717f;
        position: absolute;
        top: 21px;
        left: 50%;
        z-index: 0;
    }

    #careerTestForm ul#progressbar li.active:before,
    #careerTestForm ul#progressbar li.active:after {
        background: #4A8B8C;
    }

    #careerTestForm ul#progressbar li:last-child:after {
        content: unset;
    }

    .career-form .form-card h2 {
        color: #4A8B8C;
        font-size: 35px;
        font-weight: bold;
        text-align: center;
    }

    .career-form .form-card h6 {
        font-size: 24px;
        color: #2e2e2e;
        text-align: center;
    }

    .career-form .form-card .table-responsive {
        margin-top: 50px;
        margin-bottom: 50px;
    }

    .career-form .table>tbody>tr>td,
    .career-form .table>thead>tr>th {
        text-align: center;
        border: 1px solid #fff;
    }

    .career-form .table>thead>tr>th {
        color: #fff;
        min-width: 150px;
    }

    .career-form .table>thead>tr>th:nth-child(2) {
        background-color: #F01A26;
    }

    .career-form .table>thead>tr>th:nth-child(3) {
        background-color: #F89418;
    }

    .career-form .table>thead>tr>th:nth-child(4) {
        background-color: #FFBC0C;
    }

    .career-form .table>thead>tr>th:nth-child(5) {
        background-color: #8EC543;
    }

    .career-form .table>thead>tr>th:nth-child(6) {
        background-color: #029440;
    }

    .career-form .table>tbody>tr:nth-child(odd)>th {
        background-color: #F2F2F2;
    }

    .career-form .table>tbody>tr:nth-child(even)>th {
        background-color: #F8F8F8;
    }

    .career-form .table tbody tr td:nth-child(2) {
        background-color: #FAC8CB;
    }

    .career-form .table tbody tr td:nth-child(3) {
        background-color: #FDDFBD;
    }

    .career-form .table tbody tr td:nth-child(4) {
        background-color: #FFF2CF;
    }

    .career-form .table tbody tr td:nth-child(5) {
        background-color: #DEEDC4;
    }

    .career-form .table tbody tr td:nth-child(6) {
        background-color: #B6DDCA;
    }

    .career-form .form-footer {
        text-align: center;
    }

    .career-form .form-footer input.next {
        padding: 10px 15px;
        color: #fff;
        background-color: #4A8B8C;
        font-size: 20px;
        font-weight: bold;
        outline: none;
        border: 1px solid #4A8B8C;
        transition: all .4s ease-in-out;
    }

    .career-form .form-footer input.next:hover {
        background-color: #fff;
        color: #4A8B8C;
    }

    #careerTestForm fieldset:not(:first-of-type) {
        display: none
    }

    .form-card .last-step {
        width: 80%;
        margin: 50px auto;
    }

    .career-form .form-card .last-step .requirements {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 10px;
        gap: 5px;
    }

    .career-form .form-card .last-step .requirements h4 {
        width: 80%;
        margin-bottom: 0;
        background-color: #F2F2F2;
        font-size: 14px;
        font-weight: bold;
        color: #2e2e2e;
        height: 50px;
        display: flex;
        align-items: center;
        padding: 0 15px;
    }

    .career-form .form-card .last-step .requirements select {
        width: 20%;
        background-color: #6F717F;
        color: #fff;
        padding: 10px;
        height: 50px;
        outline: none;
    }



    /******************** Responsive Start **********************/


    @media (min-width: 1600px) {}

    @media (max-width: 1440px) {

        .career-form .table>thead>tr>th {
            min-width: 130px;
        }
    }

    @media (max-width: 1350px) {

        .career-form .table>thead>tr>th {
            min-width: 120px;
        }

    }

    @media (max-width: 1199px) {}

    @media (max-width: 991px) {}

    @media (max-width: 767px) {}

    @media (max-width: 575px) {}

    /******************** Responsive End **********************/
</style>

@endsection

@section('scripts')

<script>
    $(document).ready(function() {

        var current_fs, next_fs; //fieldsets
        var opacity;
        var current = 1;
        var steps = $("fieldset").length;

        // setProgressBar(current);

        $(".next").click(function() {

            current_fs = $(this).parent().parent();
            next_fs = $(this).parent().parent().next();

            //Add Class Active
            $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

            //show the next fieldset
            next_fs.show();
            //hide the current fieldset with style
            current_fs.animate({
                opacity: 0
            }, {
                step: function(now) {
                    // for making fielset appear animation
                    opacity = 1 - now;

                    current_fs.css({
                        'display': 'none',
                        'position': 'relative'
                    });
                    next_fs.css({
                        'opacity': opacity
                    });
                },
                duration: 500
            });
            // setProgressBar(++current);
        });

        $("#progressbar li").click(function() {
            var li_index = $(this).index();
            var li_index = li_index + 1
            // var fieldset_to_show = $("fieldset").eq(li_index);

            console.log(li_index, "test")
            // return false;

            $("#progressbar li").removeClass("active");
            $(this).addClass("active");

            $("fieldset").css({
                'display': 'none',
                'position': 'relative',
                'opacity': '0'
            });
            // fieldset_to_show.show();
            jQuery(`fieldset:nth-child(${li_index})`).css({
                'display': 'block',
                'position': 'relative',
                'opacity': '1'
            });


        });

        // $(".previous").click(function() {

        //     current_fs = $(this).parent().parent();
        //     previous_fs = $(this).parent().parent().prev();

        //     //Remove class active
        //     $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

        //     //show the previous fieldset
        //     previous_fs.show();

        //     //hide the current fieldset with style
        //     current_fs.animate({
        //         opacity: 0
        //     }, {
        //         step: function(now) {
        //             // for making fielset appear animation
        //             opacity = 1 - now;

        //             current_fs.css({
        //                 'display': 'none',
        //                 'position': 'relative'
        //             });
        //             previous_fs.css({
        //                 'opacity': opacity
        //             });
        //         },
        //         duration: 500
        //     });
        //     setProgressBar(--current);
        // });

        // function setProgressBar(curStep) {
        //     var percent = parseFloat(100 / steps) * curStep;
        //     percent = percent.toFixed();
        //     $(".progress-bar")
        //         .css("width", percent + "%")
        // }

        $(".submit").click(function() {
            return false;
        })

    });
</script>
<!-- Page JS Plugins -->

@include('admin.includes.js-delete')

<!-- Page JS Code -->

@endsection