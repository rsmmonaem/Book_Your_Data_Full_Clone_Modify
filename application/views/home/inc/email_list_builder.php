<!-- slider part start here -->
<div id="root" style="min-height: 100vh; background-color: #f6f6f6;">
    <div>
        <div class="page-title tab">
            <div class="container page-title__container table-layout-fixed">
                <div class="page-title__col page-title__col--4">
                    <a class="checkout-steps-link checkout-steps-link--tool <?php 
if (isset($business)) {
    echo 'is-active';
} 
?>
" aria-current="true" href="<?= base_url('home/email_list_builder')?>">
                        <span class="checkout-steps-link__text">Business Contacts</span>
                    </a>
                </div>
                <div class="page-title__col page-title__col--4">
                    <a class="checkout-steps-link checkout-steps-link--tool <?php 
if (isset($health)) {
    echo 'is-active';
}
?>
" aria-current="false" href="<?= base_url('home/email_list_by_health_Care')?>">
                        <span class="checkout-steps-link__text">Healthcare Professionals</span>
                    </a>
                </div>
                <div class="page-title__col page-title__col--4">
                    <a class="checkout-steps-link checkout-steps-link--tool <?php 
if(isset($realstate)) {
    echo 'is-active';
}
?>
" aria-current="false" href="<?= base_url('home/email_list_by_real_state')?>">
                        <span class="checkout-steps-link__text">Real Estate Agents</span>
                    </a>
                </div>
            </div>
        </div>
        <div>
            <div class="tool-top-bar is-fixed">
                <div class="tool-top-bar__inner">
                    <div class="container">
                        <div class="tool-top-bar__left">
                            <span class="tool-top-bar__contacts gap-right">Over 1M Contacts</span><span
                                class="tool-top-bar__notification">Please add more filters to your search</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <main class="pad-top-small pad-bottom-medium bg-vapor">
            <div class="container">
                <div class="row">
				<div class="col-md-3">
                            <div class="shadow-primary form form--slim form--tool">
                                <div class="box">
                                    <h4 class="box__title">Contact Title</h4>
                                    <div>
                                        <div class="gap-bottom-small">
											<div class="" role="button" tabindex="0">
												<label for="jobLevelFilter">Filter by Job Level:</label>
												<select id="jobLevelFilter" class="form-select" aria-label="Default select example">
														<option selected value="">All</option>
												</select>
											</div>
                                        </div>
                                    </div>
									<div>
                                        <div class="gap-bottom-small">
											<div class="" role="button" tabindex="0">
												<label for="jobFunctionFilter">Filter by JOB FUNCTIONS:</label>
												<select id="jobFunctionFilter" class="form-select" aria-label="Default select example">
														<option selected value="">All</option>
												</select>
											</div>
                                        </div>
                                    </div>
                                </div>
								<div class="box">
									<h4 class="box__title">
										<span><span class="align-middle">Company</span> <span class="question-mark js-popover" data-trigger="focus hover" data-content="You can filter your results by using your desired &quot;industry&quot; keywords or SIC Codes." data-placement="right" data-container="body" data-original-title="" title="">?</span></span>
									</h4>
									<div>
                                        <div class="gap-bottom-small">
											<div class="" role="button" tabindex="0">
												<label for="CompanyFilter">Filter by Company:</label>
												<select id="CompanyFilter" class="form-select" aria-label="Default select example">
														<option selected value="">All</option>
												</select>
											</div>
                                        </div>
                                    </div>
									<div>
                                        <div class="gap-bottom-small">
											<div class="" role="button" tabindex="0">
												<label for="sic_coad_Filter">Filter by SIC Coad :</label>
												<select id="sic_coad_Filter" class="form-select" aria-label="Default select example">
														<option selected value="">All</option>
												</select>
											</div>
                                        </div>
                                    </div>
								</div>
                            </div>
                        </div>
                    <div class="col-md-9">
                        <div>

							<span class="block gap-bottom-xsmall">Preview of 20 direct email contacts found as
                                sample for your current
                                search.</span>
                            <table id="emailTable"
                                class="table table--primary table--hover table--fixed table--pointer shadow-primary gap-bottom-xsmall">
                                <thead>
                                    <tr>
                                        <th>Direct Email</th>
                                        <th>Contact Name</th>
                                        <th>Company</th>
										<th style="display: none;">SIC Coad</th>
										<th style="display: none;">Employee Range</th>
										<th style="display: none;">Revenue Range</th>
                                        <th style="display: none;">Job Level</th>
										<th>Job Function</th>
                                        <th>Country </th>
										<th style="display: none;">City </th>
                                    </tr>
                                </thead>
                                <tbody id="emailTableBody">
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>

<script>
	 function ggg() {
      let x = document.getElementById("menus");
      if (x.style.display === "block") {
        x.style.display = "none";
      } else {
        x.style.display = "block";
      }
    }
    function func() {
      let x = document.getElementById("funcmenu");
      if (x.style.display === "block") {
        x.style.display = "none";
      } else {
        x.style.display = "block";
      }
    }
     function job() {
      let x = document.getElementById("jobmenu");
      if (x.style.display === "block") {
        x.style.display = "none";
      } else {
        x.style.display = "block";
      }
    }
</script>
<!-- slider part end here -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
// Assuming emailData is an array of objects with a 'Job_function' property

// Assuming emailData is an array of objects with a 'Job_function' property

$(document).ready(function() {
    $.ajax({
        url: '<?php if(isset($health)){echo base_url('home/get_email_preview_by_health_Care');}elseif (isset($realstate)) {echo base_url('home/get_email_preview_by_real_state');}else{echo base_url('home/get_email_preview_by_buseness');} ?>',
        type: 'GET',
        dataType: 'json',
        success: function(response) {
            if (response.status === 'success') {
                // Data retrieval was successful
                var emailData = response.data['data'];
                var title = response.data['title'];
                var emailTableBody = $('#emailTableBody');

                // Populate the email table
                $.each(emailData, function(index, item) {
                    var firstTwoDirectEmail = item.direct_email.substring(0, 2);
                    var lastTwoDirectEmail = item.direct_email.substring(item.direct_email.length - 2);
                    var middleStarsDirectEmail = '*'.repeat(item.direct_email.length - 4);
                    var formattedDirectEmail = firstTwoDirectEmail + middleStarsDirectEmail + lastTwoDirectEmail;

                    var firstTwoContactName = item.contact_name.substring(0, 2);
                    var lastTwoContactName = item.contact_name.substring(item.contact_name.length - 2);
                    var middleStarsContactName = '*'.repeat(item.contact_name.length - 4);
                    var formattedContactName = firstTwoContactName + middleStarsContactName + lastTwoContactName;

                    var rowHtml = '<tr>' +
                        '<td>' + formattedDirectEmail + '</td>' +
                        '<td>' + formattedContactName + '</td>' +
                        '<td>' + item.company + '</td>' +
                        '<td style="display: none;">' + item.sic_coad + '</td>' +
                        '<td style="display: none;">' + item.employee_range + '</td>' +
                        '<td style="display: none;">' + item.revenue_range + '</td>' +
                        '<td style="display: none;">' + item.job_lavel + '</td>' +
                        '<td>' + item.job_function_uri + '</td>' +
                        '<td>' + item.country + '</td>' +
                        '<td style="display: none;">' + item.city + '</td>' +
                        '</tr>';
                    emailTableBody.append(rowHtml);
                });

                // Populate the job level filter select element
                var jobLevelFilterSelect = $("#jobLevelFilter");
                var uniqueJobLevels = [];

                $.each(emailData, function(index, item) {
                    var jobLevel = item.job_lavel;
                    if (jobLevel && !uniqueJobLevels.includes(jobLevel)) {
                        uniqueJobLevels.push(jobLevel);
                    }
                });

                uniqueJobLevels.sort();

                $.each(uniqueJobLevels, function(index, jobLevel) {
                    jobLevelFilterSelect.append($('<option>', {
                        value: jobLevel,
                        text: jobLevel
                    }));
                });

                // Populate the job function filter select element
                var jobFunctionFilterSelect = $("#jobFunctionFilter");
                var uniqueJobFunctions = [];

                $.each(emailData, function(index, item) {
                    var jobFunction = item.Job_function;
                    if (jobFunction && !uniqueJobFunctions.includes(jobFunction)) {
                        uniqueJobFunctions.push(jobFunction);
                    }
                });

                uniqueJobFunctions.sort();

                $.each(uniqueJobFunctions, function(index, jobFunction) {
                    jobFunctionFilterSelect.append($('<option>', {
                        value: jobFunction,
                        text: jobFunction
                    }));
                });

                // Populate the company filter select element
                var companyFilterSelect = $("#CompanyFilter");
                var uniqueCompanies = [];

                $.each(emailData, function(index, item) {
                    var company = item.company;
                    if (company && !uniqueCompanies.includes(company)) {
                        uniqueCompanies.push(company);
                    }
                });

                uniqueCompanies.sort();

                $.each(uniqueCompanies, function(index, company) {
                    companyFilterSelect.append($('<option>', {
                        value: company,
                        text: company
                    }));
                });

                // Populate the sic_coad filter select element
                var sicCoadFilterSelect = $("#sic_coad_Filter");
                var uniqueSicCoads = [];

                $.each(emailData, function(index, item) {
                    var sicCoad = item.sic_coad;
                    if (sicCoad && !uniqueSicCoads.includes(sicCoad)) {
                        uniqueSicCoads.push(sicCoad);
                    }
                });

                uniqueSicCoads.sort();

                $.each(uniqueSicCoads, function(index, sicCoad) {
                    sicCoadFilterSelect.append($('<option>', {
                        value: sicCoad,
                        text: sicCoad
                    }));
                });

                // Add event listeners for filtering
                jobLevelFilterSelect.on("change", filterTable);
                jobFunctionFilterSelect.on("change", filterTable);
                companyFilterSelect.on("change", filterTable);
                sicCoadFilterSelect.on("change", filterTable);

                function filterTable() {
                    var selectedJobLevel = jobLevelFilterSelect.val().trim();
                    var selectedJobFunction = jobFunctionFilterSelect.val().trim();
                    var selectedCompany = companyFilterSelect.val().trim();
                    var selectedSicCoad = sicCoadFilterSelect.val().trim();

                    $("table#emailTable tbody tr").each(function() {
                        var row = $(this);
                        var jobLevel = row.find("td:eq(6)").text().trim();
                        var jobFunction = row.find("td:eq(7)").text().trim();
                        var company = row.find("td:eq(2)").text().trim();
                        var sicCoad = row.find("td:eq(3)").text().trim();

                        if ((selectedJobLevel === "" || selectedJobLevel === jobLevel) &&
                            (selectedJobFunction === "" || selectedJobFunction === jobFunction) &&
                            (selectedCompany === "" || selectedCompany === company) &&
                            (selectedSicCoad === "" || selectedSicCoad === sicCoad)) {
                            row.show();
                        } else {
                            row.hide();
                        }
                    });
                }
            } else {
                console.error(response.message);
            }
        },
        error: function() {
            console.error('An error occurred during the AJAX request.');
        }
    });
});

</script>


<!-- ready to boost section start here -->
<div class="lead hidden-dd ttop_ttitlle">
    <div class="container lead__container">
        <div class="lead__col lead__col--left">
            <h4 class="lead__text gap-bottom-tld">HAVE QUESTIONS? CALL US AT 866-925-8949.</h4>
        </div>
        <div class="lead__col lead__col--right">
            <a class="button button--quaternary full-width" href="#">
                Contact Us <i class="icon icon-arrow-forward button--quaternary__icon ri-arrow-right-line"></i>
            </a>
        </div>
    </div>
</div>
