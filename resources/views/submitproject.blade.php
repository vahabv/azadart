@extends ('layout')

@section ('content')


		<div class="container a-submitproject">
			<div class="row">
				<div class="col-md-12 projecttitlemain">
					
					
					
					<div class="col-md-4">
						<h4 >Project Title</h4>
						<p>Enter a short title for your project</p> </div>
						<div class="col-md-8 col-sm-12">
							
							<input type="text"  placeholder="Project Title" >
						</div>
						
						
					
					
				</div>
				<div class="col-md-12 budget-a">
					
					
					
					<div class="col-md-4">
						<h4 >Budget ()</h4>
					</div>
					<div class="col-md-8 col-sm-12">
						
						<input type="number"  placeholder="Budget" >
					</div>
					</div>
					<!-- ########################################################### -->
					<div class="col-md-12 budget-a">
					
					
					
					<div class="col-md-4">
						<h4 >Skills </h4>
						<p>Press Enter to keep adding skills </p>
					</div>
					<div class="col-md-8 col-sm-12">
						
						<input type="text"  placeholder="Skills" >
					</div>
					</div>
					<!-- ####################################3 -->
					<div class="col-md-12 budget-a">
					
					
					
					<div class="col-md-4">
						<h4 >Category</h4>
						<p> Select the most appropriate one(s)</p>
					</div>
					<div class="col-md-8 col-sm-12">
						
						<input type="text"  placeholder="Budget" >
					</div>
					</div>
					<!-- ################## -->
						<div class="col-md-12 budget-a">
					
					
					
					<div class="col-md-4">
						<h4 >Attachment </h4>
						<p>File extension: Png, Jpg, Pdf, Zip
</p>
					</div>
					<div class="col-md-8 col-sm-12">
						
						<input type="file"  >
					</div>
					</div>
					<!-- ##########################33 -->
					<div class="col-md-12 editrhtml">
					<div class="col-md-4">
						<h4 >Description  </h4>
						<p>Describe your project in a few paragraphs</p>

					</div>
						<div class="col-md-8 ">
						
						<input type="text"  >
					</div>
<input class="btn btn-primary" type="submit" value="Submit" style="
    float: right;
    width: 240px;
    height: 53px;
    margin-top: 11px;
">
				</div>
			</div>
</div>

	@stop