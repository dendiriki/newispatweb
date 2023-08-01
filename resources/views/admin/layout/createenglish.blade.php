@extends('admin.tools.main')

@section('content')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Create New Post In English</h1>

    </div>
    <div class="col-lg-8">
        <form method="POST" action="/admin/posts" class="mb-5" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                    name="title" required autofocus>

            </div>
            <div class="mb-3">
                <label for="name" class="form-label">name created</label>
                <input type="text" class="form-control form-select @error('name') is-invalid @enderror" id="name" name="name"
                    required autofocus >
            </div>
            <div class="mb-3">
                <label for="slug" class="form-label">Slug</label>
                <select type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug"
                    required >

                    <option value="">---</option>
                    <option value="COMPANYPROFILE">COMPANY PROFILE</option>
                    <option value="COMPANYBOARDOFDIRECTORS">COMPANY BOARD OF DIRECTORS</option>
                    <option value="COMPANYVISION,MISSION&VALUES">COMPANY VISION, MISSION & VALUES</option>
                    <option value="COMPANYHIGHLIGHTS&ACHIEVEMENTSOVERVIEW">COMPANY HIGHLIGHTS & ACHIEVEMENTS OVERVIEW</option>
                    <option value="COMPANYKANCERTIFICATION">COMPANY KAN CERTIFICATION</option>
                    <option value="COMPANYJISCERTIFICATION">COMPANY JIS CERTIFICATION</option>
                    <option value="COMPANYSNICERTIFICATION">COMPANY SNI CERTIFICATION</option>
                    <option value="COMPANYSIRIMCERTIFICATION">COMPANY SIRIM CERTIFICATION</option>
                    <option value="COMPANYISOCERTIFICATION">COMPANY ISO CERTIFICATION</option>
                    <option value="COMPANYTKDNCERTIFICATION">COMPANY TKDN CERTIFICATION</option>
                    <option value="COMPANYGROUPVIDEO">COMPANY GROUP VIDEO</option>
                    <option value="COMPANYMANAGEMENTSYSTEM">COMPANY MANAGEMENT SYSTEM</option>
                    <option value="COMPANYSHE">COMPANY SHE</option>
                    <option value="PRODUCTHIGHCARBONSTEEL">COMPANY GROUP VIDEO</option>
                    <option value="PRODUCTLOWCARBONSTEEL">COMPANY GROUP VIDEO</option>
                    <option value="PRODUCTCOLDHEADINGQUALITYSTEEL">PRODUCT COLD HEADING QUALITY STEEL</option>
                    <option value="PRODUCT GENERAL PURPOSE WR">PRODUCT GENERAL PURPOSE WR</option>
                    <option value="PRODUCT WELDING ELECTRODE">PRODUCT WELDING ELECTRODE</option>
                    <option value="PRODUCT PLAIN / DEFORM BAR">PRODUCT PLAIN / DEFORM BAR</option>
                    <option value="PRODUCT GENERAL STRUCTURE">PRODUCT GENERAL STRUCTURE</option>
                    <option value="PRODUCT NAILS & NAIL WIRE">PRODUCT NAILS & NAIL WIRE</option>
                    <option value="PRODUCT SCRAP PROVIDER">PRODUCT SCRAP PROVIDER</option>
                    <option value="INDUSTRIAL PROCESS FACILITAS">INDUSTRIAL PROCESS FACILITAS</option>
                    <option value="INDUSTRIAL PROCESS FLOWCHART OF STEEL MAKING">INDUSTRIAL PROCESS FLOWCHART OF STEEL MAKING</option>
                    <option value="INDUSTRIAL PROCESS FLOWCHART OF WIRE ROD ROLING">INDUSTRIAL PROCESS FLOWCHART OF WIRE ROD ROLING</option>
                    <option value="INDUSTRIAL PROCESS ISPAT PANCA PUTRA FACILITAS">INDUSTRIAL PROCESS ISPAT PANCA PUTRA FACILITAS</option>
                    <option value="INDUSTRIAL PROCESS ISPAT BUKIT BAJA FACILITAS">INDUSTRIAL PROCESS ISPAT BUKIT BAJA FACILITAS</option>
                    <option value="INDUSTRIAL PROCESS ISPAT WIRE PRODUCTS FACILITAS">INDUSTRIAL PROCESS ISPAT WIRE PRODUCTS FACILITAS</option>
                    <option value="SUBSIDIARIES PT. ISPAT WIRE PRODUCT">SUBSIDIARIES PT. ISPAT WIRE PRODUCT</option>
                    <option value="SUBSIDIARIES PT. ISPAT PANCA PUTRA">SUBSIDIARIES PT. ISPAT PANCA PUTRA</option>
                    <option value="SUBSIDIARIES PT. ISPAT BUKIT BAJA">SUBSIDIARIES PT. ISPAT BUKIT BAJA</option>
                    <option value="ENVIRONMENT">ENVIRONMENT</option>
                    <option value="BROCHURE PT. ISPAT INDO">BROCHURE PT. ISPAT INDO</option>
                    <option value="BROCHURE PT. ISPAT WIRE PRODUCT">BROCHURE PT. ISPAT WIRE PRODUCT</option>
                    <option value="BROCHURE PT. ISPAT PANCA PUTRA">BROCHURE PT. ISPAT PANCA PUTRA</option>
                    <option value="BROCHURE PT. ISPAT BUKIT BAJA">BROCHURE PT. ISPAT BUKIT BAJA</option>
                    <option value="CAREERS">CAREERS</option>


                </select>
            </div>
            <div class="mb-3">
                <label for="summernote" class="form-label">Content</label>
                <textarea id="summernote" class="form-control" name="content"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Create Post</button>
        </form>
    </div>

@endsection
