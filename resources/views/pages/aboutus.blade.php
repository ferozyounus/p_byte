@extends('layouts.website.main')
@section('content')


<main class="main-content">
	<section class="single-page-banner">
	  <div class="container">
		<div class="row">
		  <div class="col-md-12">
			<h1>About</h1>
		  </div>
		</div>
	  </div>
	</section>
	<section class="about-sec-1">
	  <div class="container">
		<h1>Our Story</h1>
		<div class="row align-items-center">
		  <div class="col-md-6">
			<img src="{{asset('front/images/story-img.png')}}" alt="" />
		  </div>
		  <div class="col-md-6">
			<h3>
			  Our story comes<br />
			  from a personal place.
			</h3>
			<p>
			  Who wants to live only for the weekends? We found ourselves
			  increasingly doing just that- loving Fridays and dreading
			  Mondays. It wasn't only us- many of our friends and colleagues
			  felt the same. We heard from students who felt like they had no
			  guidance or direction when choosing a career.
			  <br /><br />However, we also know there are many who love their
			  careers. We wanted to find out more about them. What do they
			  share in common? How did they choose their career and how did
			  they know it was the right choice for them? What if we had more
			  knowledge about different careers and had this insight from
			  people who are happy in their careers?
			</p>
		  </div>
		</div>
	  </div>
	</section>
	<section class="about-sec-2">
	  <div class="container">
		<div class="row align-items-center">
		  <div class="col-md-6">
			<img src="{{asset('front/images/logodd.png')}}" alt="" />
			<h1>We Want To Be A Part Of Changing These Numbers.</h1>
		  </div>
		  <div class="col-md-6">
			<ul>
			  <li>
				47% of older millennials have significant career regrets.
			  </li>
			  <li>
				Struggling to choose a major and/or changing majors increases
				the time and cost associated with obtaining a degree.
			  </li>
			  <li>
				Almost two-thirds of students feel overwhelmed by the process
				of selecting a major.
			  </li>
			  <li>
				Most schools lack the strategies and resources to expose
				students to careers and industries.
			  </li>
			  <li>Most students can only list or describe 40 careers.</li>
			  <li>
				Student perceptions about certain industries form when they
				are as young as 10 years old and remain unchanged at the age
				of 14.
			  </li>
			</ul>
		  </div>
		</div>
	  </div>
	</section>

	<section class="about-sec-3">
	  <div class="container">
		<h1>Our Solutions</h1>
		<div class="row">
		  <div class="col-md-6">
			<ul>
			  <li>
				Personalized career exploration. A fun, informative, and
				comprehensive way to explore careers through our website and
				use of services.
			  </li>
			  <li>
				Explore career options with detailed information about the
				career, salary, education, and trends. Take personality and
				career assessments. Read and watch videos of real people
				sharing personal career stories. Search for colleges,
				internships, apprenticeships, based on career choices.
				<br /><br />
				Connect for personalized career services:<br />
				Career guidance and assistance
			  </li>
			</ul>
		  </div>
		  <div class="col-md-6">
			<ul>
			  <li>
				Matching with mentors, job shadowing, internships, and
				apprenticeships. Assistance with applications for
				college/financialaid/scholarships Recommendations for course
				selections and extra curricular activities related to career
				interests
			  </li>
			  <li>
				Sliding scale for fee based services depending on ability to
				pay. We need to make career opportunities available for all
				despite their current financial situation. Donations accepted
				for premier services, subscriptions, and scholarships.
			  </li>
			  <li>
				School subscriptions for all access to our website, conferring
				with our career specialists, and managing career fairs and
				career days.
			  </li>
			</ul>
		  </div>
		</div>
		<div class="cus-boc">
		  <div class="row">
			<div class="col-md-12">
			  <h1>
				Through Increased Information, Personal Career Stories,
				Support, And Expert Guidance, We Can Help Find The Right
				Career For You.
			  </h1>
			</div>
		  </div>
		</div>
	  </div>
	</section>

	<section class="about-sec-4">
	  <div class="container">
		<h1>Our Team</h1>
		<div class="team-1">
		  <div class="row align-items-center">
			<div class="col-md-4">
			  <img
				src="{{asset('front/images/PXL_20220322_170019146.PORTRAIT_2-scaled.png')}}"
				alt=""
			  />
			</div>
			<div class="col-md-8">
			  <h2>Suzy Adams</h2>
			  <h3>Chief Operating Officer</h3>
			  <p>
				Suzy 's degree and background is in Organizational Leadership.
				Suzy has worked with high school students in the Upward Bound
				program at the University of Akron as a Tutor Counselor for
				several summer sessions. She has a passion for helping others
				and providing her expertise within career development and
				leadership.
			  </p>
			</div>
		  </div>
		</div>
		<div class="team-2">
		  <div class="row align-items-center">
			<div class="col-md-8">
			  <h2>Peggy Elliot</h2>
			  <h3>Founder And CEO</h3>
			  <p>
				Our passion for personalized career exploration comes from a
				very personal place. After graduating with a degree in
				psychology, Peggy held several different positions in
				non-profit agencies, government agencies, and both small and
				large private sector companies. Realizing loved ones who were
				struggling with career decisions, the idea formed for Love
				Every Monday. Further discussions and research determined
				there is a need for additional guidance, education, and
				assistance with career choices for both students and adults.
				Peggy used her entrepreneurial spirit, leadership skills, and
				desire to help others to found Love Every Monday.
			  </p>
			</div>
			<div class="col-md-4">
			  <img src="{{asset('front/images/Peggy-headshot.png')}}" alt="" />
			</div>
		  </div>
		</div>
	  </div>
	</section>

	<section class="about-sec-5">
	  <div class="container">
		<h1>Donate</h1>
		<div class="row align-items-center custom-border-form">
		  <div class="col-md-12">
			<form id="custom-form" class="row g-4">
			  <div class="col-md-6">
				<label for="inputName" class="form-label">First Name</label>
				<input
				  type="text"
				  class="form-control cus-input"
				  id="inputName"
				/>
			  </div>
			  <div class="col-md-6">
				<label for="inputLastName" class="form-label"
				  >Last Name</label
				>
				<input
				  type="text"
				  class="form-control cus-input"
				  id="inputLastName"
				/>
			  </div>
			  <div class="col-12">
				<label for="inputEmail4" class="form-label"
				  >Email Address</label
				>
				<input
				  type="email"
				  class="form-control cus-input"
				  id="inputEmail4"
				/>
			  </div>

			  <div class="col-12">
				<h4>Donation</h4>
				<div class="form-check form-check-inline">
				  <input
					class="form-check-input"
					type="radio"
					name="inlineRadioOptions"
					id="inlineRadio1"
					value="10.00"
					checked
				  />
				  <label class="form-check-label" for="inlineRadio1"
					>$10.00</label
				  >
				</div>
				<div class="form-check form-check-inline">
				  <input
					class="form-check-input"
					type="radio"
					name="inlineRadioOptions"
					id="inlineRadio2"
					value="20.00"
				  />
				  <label class="form-check-label" for="inlineRadio2"
					>$20.00</label
				  >
				</div>
				<div class="form-check form-check-inline">
				  <input
					class="form-check-input"
					type="radio"
					name="inlineRadioOptions"
					id="inlineRadio3"
					value="30.00"
				  />
				  <label class="form-check-label" for="inlineRadio3"
					>$30.00</label
				  >
				</div>
				<div class="form-check form-check-inline">
				  <input
					class="form-check-input"
					type="radio"
					name="inlineRadioOptions"
					id="inlineRadio4"
					value="40.00"
				  />
				  <label class="form-check-label" for="inlineRadio4"
					>$40.00</label
				  >
				</div>
				<div class="form-check form-check-inline">
				  <input
					class="form-check-input"
					type="radio"
					name="inlineRadioOptions"
					id="inlineRadio5"
					value="Your Choice"
				  />
				  <label class="form-check-label" for="inlineRadio5"
					>Your Choice</label
				  >
				</div>
			  </div>

			  <div class="col-12">
				<h4>What type of donation would you like to make?</h4>
				<div class="form-check form-check-inline">
				  <input
					class="form-check-input"
					type="radio"
					name="inlineRadioOptions2"
					id="inlineRadio21"
					value="One Time Donation"
					checked
				  />
				  <label class="form-check-label" for="inlineRadio21"
					>One Time Donation</label
				  >
				</div>
				<div class="form-check form-check-inline">
				  <input
					class="form-check-input"
					type="radio"
					name="inlineRadioOptions2"
					id="inlineRadio22"
					value="Monthly Contribution"
				  />
				  <label class="form-check-label" for="inlineRadio22"
					>Monthly Contribution</label
				  >
				</div>
				<div class="form-check form-check-inline">
				  <input
					class="form-check-input"
					type="radio"
					name="inlineRadioOptions2"
					id="inlineRadio23"
					value="Yearly Contribution"
				  />
				  <label class="form-check-label" for="inlineRadio23"
					>Yearly Contribution</label
				  >
				</div>
			  </div>

			  <div class="col-12">
				<h4>Donation For</h4>
				<div class="form-check form-check-inline">
				  <input
					class="form-check-input"
					type="radio"
					name="inlineRadioOptions3"
					id="inlineRadio31"
					value="Scholarships"
					checked
				  />
				  <label class="form-check-label" for="inlineRadio31"
					>Scholarships</label
				  >
				</div>
				<div class="form-check form-check-inline">
				  <input
					class="form-check-input"
					type="radio"
					name="inlineRadioOptions3"
					id="inlineRadio32"
					value="Career Guidance"
				  />
				  <label class="form-check-label" for="inlineRadio32"
					>Career Guidance</label
				  >
				</div>
				<div class="form-check form-check-inline">
				  <input
					class="form-check-input"
					type="radio"
					name="inlineRadioOptions3"
					id="inlineRadio33"
					value="Mentorship"
				  />
				  <label class="form-check-label" for="inlineRadio33"
					>Mentorship</label
				  >
				</div>
				<div class="form-check form-check-inline">
				  <input
					class="form-check-input"
					type="radio"
					name="inlineRadioOptions3"
					id="inlineRadio34"
					value="Full Website Access Subscriptions"
				  />
				  <label class="form-check-label" for="inlineRadio34"
					>Full Website Access Subscriptions</label
				  >
				</div>
			  </div>

			  <div class="col-12">
				<h4>How would you like to pay?</h4>
				<div class="form-check form-check-inline">
				  <input
					class="form-check-input"
					type="radio"
					name="inlineRadioOptions4"
					id="inlineRadio41"
					value="Credit Card"
					checked
				  />
				  <label class="form-check-label" for="inlineRadio41"
					>Credit Card</label
				  >
				</div>
				<div class="form-check form-check-inline">
				  <input
					class="form-check-input"
					type="radio"
					name="inlineRadioOptions4"
					id="inlineRadio42"
					value="Paypal"
				  />
				  <label class="form-check-label" for="inlineRadio42"
					>Paypal</label
				  >
				</div>
			  </div>
			  <div class="col-12">
				<label for="inputCreditCard" class="form-label"
				  >Credit Card</label
				><svg
				  xmlns="http://www.w3.org/2000/svg"
				  xmlns:xlink="http://www.w3.org/1999/xlink"
				  width="182"
				  height="28"
				  viewBox="0 0 182 28"
				>
				  <defs>
					<pattern
					  id="pattern"
					  preserveAspectRatio="none"
					  width="100%"
					  height="100%"
					  viewBox="0 0 1000 154"
					>
					  <image
						width="1000"
						height="154"
						xlink:href="data:image/png;base64,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"
					  />
					</pattern>
				  </defs>
				  <rect
					id="credit-card-icons-png"
					width="182"
					height="28"
					fill="url(#pattern)"
				  />
				</svg>

				<input
				  type="text"
				  class="form-control cus-input"
				  id="inputCreditCard"
				/>
			  </div>
			  <!-- <div class="col-sm-3">
				<label for="selectMonth" class="form-label"
				  >Card Number</label
				>
				<select class="form-select" id="selectMonth">
				  <option selected>MONTH</option>
				  <option value="1">One</option>
				  <option value="2">Two</option>
				  <option value="3">Three</option>
				</select>
				<h6>Expiration Date</h6>
			  </div>
			  <div class="col-sm-3">
				<label for="selectMonth" class="form-label"></label>
				<select class="form-select" id="selectMonth">
				  <option selected>Year</option>
				  <option value="2001">2001</option>
				  <option value="2002">2002</option>
				  <option value="2003">2003</option>
				  <option value="2004">2004</option>
				  <option value="2005">2005</option>
				  <option value="2006">2006</option>
				</select>
			  </div>

			  <div class="col-md-3">
				<label for="inputSecurityCode" class="form-label"
				  >Security Code</label
				>
				<input
				  type="text"
				  class="form-control cus-input"
				  id="inputSecurityCode"
				/>
			  </div> -->

			  <div class="col-12">
				<label for="inputCardholder" class="form-label"
				  >Cardholder Name</label
				>
				<input
				  type="text"
				  class="form-control cus-input"
				  id="inputCardholder"
				/>
			  </div>

			  <div class="col-12">
				<h4>Captcha</h4>
			  </div>

			  <div class="col-12">
				<label for="inputCardholder" class="form-label"
				  >Brief Message (Optional)</label
				>
				<textarea
				  name="brief"
				  id=""
				  cols="30"
				  rows="10"
				  class="form-control cus-textarea"
				></textarea>
			  </div>
			  <div class="col-12">
				<button type="submit" class="btn btn-primary">
				  Donate NOW
				</button>
			  </div>
			</form>
		  </div>
		</div>
	  </div>
	</section>
  </main>
  
 

    
@endsection
@section('script')
@endsection
