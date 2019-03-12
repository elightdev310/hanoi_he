@extends('layouts.event')

@section('htmlheader_title')Die Attach - Quiz @endsection
@section('title') @endsection

@section('page_id')die-attach-quiz @endsection

@section('content_header')
    <img src="{{asset('images/die_attach_pagev2.jpg')}}" class="img-fluid" alt="Die Attach" width="100%">
@endsection

@section('content')
    <h2 class="title text-center mt-5">DIE ATTACH</h2>
    <h3 class="font-weight-bold color-red text-center">Pre-training Questionaire</h3>

    <p class="mt-3">This pre-training questionaire is designed to help us find out as much as possible from you about the training we will be carrying out for your organization. This information will enable us to customize and focus content of the workshops on specific topics.</p>
    <p class="font-italic">This is not a "test" and you will not be "graded" on you performance.</p>

    <div class="mt-5">
        @include('layouts.includes.status_message')
    </div>
    <div class="mt-5 mb-5">
        <form id="die_attach_quiz_form" action="{{ route('die_attach_quiz_submit', ['id'=>$id]) }}" method="POST">
            @csrf
            <div class="">
                <div class="quiz1-panel">
                    <input type="checkbox" name="quiz1[rc][q]" id="quiz1-rc-q" value="1" />
                    <label for="quiz1-rc-q">Which resin chemistry is used in die-attach products?</label>
                    <div class="sub-chk-section">
                        <div class="quiz-answer">
                            <input type="checkbox" name="quiz1[rc][epoxy]" id="quiz1-rc-epoxy" value="Epoxy" />
                            <label for="quiz1-rc-epoxy">Epoxy</label>
                        </div>
                        <div class="quiz-answer">
                            <input type="checkbox" name="quiz1[rc][silicone]" id="quiz1-rc-silicone" value="Silicone" />
                            <label for="quiz1-rc-silicone">Silicone</label>
                        </div>
                        <div class="quiz-answer">
                            <input type="checkbox" name="quiz1[rc][acrylate]" id="quiz1-rc-acrylate" value="Acrylate" />
                            <label for="quiz1-rc-acrylate">Acrylate</label>
                        </div>
                        <div class="quiz-answer">
                            <input type="checkbox" name="quiz1[rc][malimide]" id="quiz1-rc-malimide" value="Malimide" />
                            <label for="quiz1-rc-malimide">Malimide</label>
                        </div>
                        <div class="quiz-answer">
                            <input type="checkbox" name="quiz1[rc][hybrid]" id="quiz1-rc-hybrid" value="Hybrid" />
                            <label for="quiz1-rc-hybrid">Hybrid</label>
                        </div>
                        <div class="quiz-answer">
                            <input type="checkbox" name="quiz1[rc][others]" id="quiz1-rc-others" value="1" />
                            <label for="quiz1-rc-others">Others please specify</label>
                            <input type="text" name="quiz1[rc][others_text]" value=""/>
                        </div>
                    </div>
                </div>

                <div class="quiz1-panel">
                    <input type="checkbox" name="quiz1[ct][q]" id="quiz1-ct-q" value="1" />
                    <label for="quiz1-ct-q">What's the commonly used die-attach curing temperature?</label>
                    <div class="sub-chk-section">
                        <div class="quiz-answer">
                            <input type="checkbox" name="quiz1[ct][125c]" id="quiz1-ct-125c" value="125C" />
                            <label for="quiz1-ct-125c">125C</label>
                        </div>
                        <div class="quiz-answer">
                            <input type="checkbox" name="quiz1[ct][150c]" id="quiz1-ct-150c" value="150C" />
                            <label for="quiz1-ct-150c">150C</label>
                        </div>
                        <div class="quiz-answer">
                            <input type="checkbox" name="quiz1[ct][175c]" id="quiz1-ct-175c" value="175C" />
                            <label for="quiz1-ct-175c">175C</label>
                        </div>
                        <div class="quiz-answer">
                            <input type="checkbox" name="quiz1[ct][200c]" id="quiz1-ct-200c" value="200C" />
                            <label for="quiz1-ct-200c">200C</label>
                        </div>
                        <div class="quiz-answer">
                            <input type="checkbox" name="quiz1[ct][others]" id="quiz1-ct-others" value="1" />
                            <label for="quiz1-ct-others">Others please specify</label>
                            <input type="text" name="quiz1[ct][others_text]" value=""/>
                        </div>
                    </div>
                </div>

                <div class="quiz1-panel">
                    <input type="checkbox" name="quiz1[eb][q]" id="quiz1-eb-q" value="1" />
                    <label for="quiz1-eb-q">Which are more important to cause epoxy bleed out?</label>
                    <div class="sub-chk-section">
                        <div class="quiz-answer">
                            <input type="checkbox" name="quiz1[eb][resin]" id="quiz1-eb-resin" value="Resin" />
                            <label for="quiz1-eb-resin">Resin</label>
                        </div>
                        <div class="quiz-answer">
                            <input type="checkbox" name="quiz1[eb][silver]" id="quiz1-eb-silver" value="Silver" />
                            <label for="quiz1-eb-silver">Silver</label>
                        </div>
                        <div class="quiz-answer">
                            <input type="checkbox" name="quiz1[eb][rs]" id="quiz1-eb-rs" value="Resin + Silver" />
                            <label for="quiz1-eb-rs">Resin + Silver</label>
                        </div>
                        <div class="quiz-answer">
                            <input type="checkbox" name="quiz1[eb][solvent]" id="quiz1-eb-solvent" value="Solvent" />
                            <label for="quiz1-eb-solvent">Solvent</label>
                        </div>
                        <div class="quiz-answer">
                            <input type="checkbox" name="quiz1[eb][sr]" id="quiz1-eb-sr" value="Solvent + Resin" />
                            <label for="quiz1-eb-sr">Solvent + Resin</label>
                        </div>
                        <div class="quiz-answer">
                            <input type="checkbox" name="quiz1[eb][ss]" id="quiz1-eb-ss" value="Solvent + Silver" />
                            <label for="quiz1-eb-ss">Solvent + Silver</label>
                        </div>
                        <div class="quiz-answer">
                            <input type="checkbox" name="quiz1[eb][others]" id="quiz1-eb-others" value="1" />
                            <label for="quiz1-eb-others">Others please specify</label>
                            <input type="text" name="quiz1[eb][others_text]" value=""/>
                        </div>
                    </div>
                </div>

                <div class="quiz1-panel">
                    <input type="checkbox" name="quiz1[sd][q]" id="quiz1-sd-q" value="1" />
                    <label for="quiz1-sd-q">What die-attach material property is important for small die sizes?</label>
                    <div class="sub-chk-section">
                        <div class="quiz-answer">
                            <input type="checkbox" name="quiz1[sd][cte]" id="quiz1-sd-cte" value="CTE" />
                            <label for="quiz1-sd-cte">CTE</label>
                        </div>
                        <div class="quiz-answer">
                            <input type="checkbox" name="quiz1[sd][tg]" id="quiz1-sd-tg" value="Tg" />
                            <label for="quiz1-sd-tg">Tg</label>
                        </div>
                        <div class="quiz-answer">
                            <input type="checkbox" name="quiz1[sd][modules]" id="quiz1-sd-modules" value="Modules" />
                            <label for="quiz1-sd-modules">Modules</label>
                        </div>
                        <div class="quiz-answer">
                            <input type="checkbox" name="quiz1[sd][blt]" id="quiz1-sd-blt" value="Bond-Line-Thickness" />
                            <label for="quiz1-sd-blt">Bond-Line-Thickness</label>
                        </div>
                        <div class="quiz-answer">
                            <input type="checkbox" name="quiz1[sd][others]" id="quiz1-sd-others" value="1" />
                            <label for="quiz1-sd-others">Others please specify</label>
                            <input type="text" name="quiz1[sd][others_text]" value=""/>
                        </div>
                    </div>
                </div>

                <div class="quiz1-panel">
                    <input type="checkbox" name="quiz1[ld][q]" id="quiz1-ld-q" value="1" />
                    <label for="quiz1-ld-q">What die-attach material property is important for large die sizes?</label>
                    <div class="sub-chk-section">
                        <div class="quiz-answer">
                            <input type="checkbox" name="quiz1[ld][cte]" id="quiz1-ld-cte" value="CTE" />
                            <label for="quiz1-ld-cte">CTE</label>
                        </div>
                        <div class="quiz-answer">
                            <input type="checkbox" name="quiz1[ld][tg]" id="quiz1-ld-tg" value="Tg" />
                            <label for="quiz1-ld-tg">Tg</label>
                        </div>
                        <div class="quiz-answer">
                            <input type="checkbox" name="quiz1[sd][modules]" id="quiz1-sd-modules" value="Modules" />
                            <label for="quiz1-sd-modules">Modules</label>
                        </div>
                        <div class="quiz-answer">
                            <input type="checkbox" name="quiz1[ld][blt]" id="quiz1-ld-blt" value="Bond-Line-Thickness" />
                            <label for="quiz1-ld-blt">Bond-Line-Thickness</label>
                        </div>
                        <div class="quiz-answer">
                            <input type="checkbox" name="quiz1[ld][others]" id="quiz1-ld-others" value="1" />
                            <label for="quiz1-ld-others">Others please specify</label>
                            <input type="text" name="quiz1[ld][others_text]" value=""/>
                        </div>
                    </div>
                </div>

                <div class="quiz1-panel">
                    <input type="checkbox" name="quiz1[msl][q]" id="quiz1-msl-q" value="1" />
                    <label for="quiz1-msl-q">Which material/s will impact MSL performance of a package?</label>
                    <div class="sub-chk-section">
                        <div class="quiz-answer">
                            <input type="checkbox" name="quiz1[msl][die-attach]" id="quiz1-msl-die-attach" value="Die-Attach" />
                            <label for="quiz1-msl-die-attach">Die-Attach</label>
                        </div>
                        <div class="quiz-answer">
                            <input type="checkbox" name="quiz1[msl][leadframe]" id="quiz1-msl-leadframe" value="Leadframe" />
                            <label for="quiz1-msl-leadframe">Leadframe</label>
                        </div>
                        <div class="quiz-answer">
                            <input type="checkbox" name="quiz1[msl][mc]" id="quiz1-msl-mc" value="Mold Compound" />
                            <label for="quiz1-msl-mc">Mold Compound</label>
                        </div>
                        <div class="quiz-answer">
                            <input type="checkbox" name="quiz1[msl][wt]" id="quiz1-msl-wt" value="Wafer type" />
                            <label for="quiz1-msl-wt">Wafer type</label>
                        </div>
                        <div class="quiz-answer">
                            <input type="checkbox" name="quiz1[msl][bw]" id="quiz1-msl-bw" value="Bonding Wire" />
                            <label for="quiz1-msl-bw">Bonding Wire</label>
                        </div>
                        <div class="quiz-answer">
                            <input type="checkbox" name="quiz1[msl][others]" id="quiz1-msl-others" value="1" />
                            <label for="quiz1-msl-others">Others please specify</label>
                            <input type="text" name="quiz1[msl][others_text]" value=""/>
                        </div>
                    </div>
                </div>

                <div class="quiz1-panel">
                    <input type="checkbox" name="quiz1[curing][q]" id="quiz1-curing-q" value="1" />
                    <label for="quiz1-curing-q">What impacts the most in curing die-attach in a package?</label>
                    <div class="sub-chk-section">
                        <div class="quiz-answer">
                            <input type="checkbox" name="quiz1[curing][temp]" id="quiz1-curing-temp" value="Temperature" />
                            <label for="quiz1-curing-temp">Temperature</label>
                        </div>
                        <div class="quiz-answer">
                            <input type="checkbox" name="quiz1[curing][n2]" id="quiz1-curing-n2" value="N2 level" />
                            <label for="quiz1-curing-n2">N2 level</label>
                        </div>
                        <div class="quiz-answer">
                            <input type="checkbox" name="quiz1[curing][ox]" id="quiz1-curing-ox" value="Oxygen level" />
                            <label for="quiz1-curing-ox">Oxygen level</label>
                        </div>
                        <div class="quiz-answer">
                            <input type="checkbox" name="quiz1[curing][leadframe]" id="quiz1-curing-leadframe" value="Leadframe" />
                            <label for="quiz1-curing-leadframe">Leadframe</label>
                        </div>
                        <div class="quiz-answer">
                            <input type="checkbox" name="quiz1[curing][contaminants]" id="quiz1-curing-contaminants" value="Contaminants" />
                            <label for="quiz1-curing-contaminants">Contaminants</label>
                        </div>
                        <div class="quiz-answer">
                            <input type="checkbox" name="quiz1[curing][others]" id="quiz1-curing-others" value="1" />
                            <label for="quiz1-curing-others">Others please specify</label>
                            <input type="text" name="quiz1[curing][others_text]" value=""/>
                        </div>
                    </div>
                </div>

                <div class="quiz1-panel">
                    <input type="checkbox" name="quiz1[ve][q]" id="quiz1-ve-q" value="1" />
                    <label for="quiz1-ve-q">What volatiles evaporates during die-attach curing?</label>
                    <div class="sub-chk-section">
                        <div class="quiz-answer">
                            <input type="checkbox" name="quiz1[ve][epoxy]" id="quiz1-ve-epoxy" value="Epoxy" />
                            <label for="quiz1-ve-epoxy">Epoxy</label>
                        </div>
                        <div class="quiz-answer">
                            <input type="checkbox" name="quiz1[ve][diluent]" id="quiz1-ve-diluent" value="Diluent" />
                            <label for="quiz1-ve-diluent">Diluent</label>
                        </div>
                        <div class="quiz-answer">
                            <input type="checkbox" name="quiz1[ve][acrylate]" id="quiz1-ve-acrylate" value="Acrylate" />
                            <label for="quiz1-ve-acrylate">Acrylate</label>
                        </div>
                        <div class="quiz-answer">
                            <input type="checkbox" name="quiz1[ve][silver]" id="quiz1-ve-silver" value="Silver" />
                            <label for="quiz1-ve-silver">Silver</label>
                        </div>
                        <div class="quiz-answer">
                            <input type="checkbox" name="quiz1[ve][copper]" id="quiz1-ve-copper" value="Copper" />
                            <label for="quiz1-ve-copper">Copper</label>
                        </div>
                        <div class="quiz-answer">
                            <input type="checkbox" name="quiz1[ve][others]" id="quiz1-ve-others" value="1" />
                            <label for="quiz1-ve-others">Others please specify</label>
                            <input type="text" name="quiz1[ve][others_text]" value=""/>
                        </div>
                    </div>
                </div>

                <div class="quiz1-panel">
                    <input type="checkbox" name="quiz1[shrink][q]" id="quiz1-shrink-q" value="1" />
                    <label for="quiz1-shrink-q">What cause die-attach to shrink during curing?</label>
                    <div class="sub-chk-section">
                        <div class="quiz-answer">
                            <input type="checkbox" name="quiz1[shrink][moisture]" id="quiz1-shrink-moisture" value="Moisture" />
                            <label for="quiz1-shrink-moisture">Moisture</label>
                        </div>
                        <div class="quiz-answer">
                            <input type="checkbox" name="quiz1[shrink][resin]" id="quiz1-shrink-resin" value="Resin" />
                            <label for="quiz1-shrink-resin">Resin</label>
                        </div>
                        <div class="quiz-answer">
                            <input type="checkbox" name="quiz1[shrink][solvent]" id="quiz1-shrink-solvent" value="Solvent" />
                            <label for="quiz1-shrink-solvent">Solvent</label>
                        </div>
                        <div class="quiz-answer">
                            <input type="checkbox" name="quiz1[shrink][silver]" id="quiz1-shrink-silver" value="Silver" />
                            <label for="quiz1-shrink-silver">Silver</label>
                        </div>
                        <div class="quiz-answer">
                            <input type="checkbox" name="quiz1[shrink][heat]" id="quiz1-shrink-heat" value="Heat" />
                            <label for="quiz1-shrink-heat">Heat</label>
                        </div>
                        <div class="quiz-answer">
                            <input type="checkbox" name="quiz1[shrink][others]" id="quiz1-shrink-others" value="1" />
                            <label for="quiz1-shrink-others">Others please specify</label>
                            <input type="text" name="quiz1[shrink][others_text]" value=""/>
                        </div>
                    </div>
                </div>

                <div class="quiz1-panel">
                    <input type="checkbox" name="quiz1[leadframe][q]" id="quiz1-leadframe-q" value="1" />
                    <label for="quiz1-leadframe-q">What property/ies of die-attach material that allow sit to stick well in leadframe and die surface?</label>
                    <div class="sub-chk-section">
                        <div class="quiz-answer">
                            <input type="checkbox" name="quiz1[leadframe][resin]" id="quiz1-leadframe-resin" value="Resin" />
                            <label for="quiz1-leadframe-resin">Resin</label>
                        </div>
                        <div class="quiz-answer">
                            <input type="checkbox" name="quiz1[leadframe][ap]" id="quiz1-leadframe-ap" value="Adhesion promoter" />
                            <label for="quiz1-leadframe-ap">Adhesion promoter</label>
                        </div>
                        <div class="quiz-answer">
                            <input type="checkbox" name="quiz1[leadframe][solvent]" id="quiz1-leadframe-solvent" value="Solvent" />
                            <label for="quiz1-leadframe-solvent">Solvent</label>
                        </div>
                        <div class="quiz-answer">
                            <input type="checkbox" name="quiz1[leadframe][filter]" id="quiz1-leadframe-filter" value="Filter" />
                            <label for="quiz1-leadframe-filter">Filter</label>
                        </div>
                        <div class="quiz-answer">
                            <input type="checkbox" name="quiz1[leadframe][ca]" id="quiz1-leadframe-ca" value="Curing Agent" />
                            <label for="quiz1-leadframe-ca">Curing Agent</label>
                        </div>
                        <div class="quiz-answer">
                            <input type="checkbox" name="quiz1[leadframe][others]" id="quiz1-leadframe-others" value="1" />
                            <label for="quiz1-leadframe-others">Others please specify</label>
                            <input type="text" name="quiz1[leadframe][others_text]" value=""/>
                        </div>
                    </div>
                </div>

                <div class="quiz1-panel">
                    <input type="checkbox" name="quiz1[delamination][q]" id="quiz1-delamination-q" value="1" />
                    <label for="quiz1-delamination-q">What generally cause die-attach delamination?</label>
                    <div class="sub-chk-section">
                        <div class="quiz-answer">
                            <input type="checkbox" name="quiz1[delamination][st]" id="quiz1-delamination-st" value="Substrate type" />
                            <label for="quiz1-delamination-st">Substrate type</label>
                        </div>
                        <div class="quiz-answer">
                            <input type="checkbox" name="quiz1[delamination][dam]" id="quiz1-delamination-dam" value="Die-Attach material" />
                            <label for="quiz1-delamination-dam">Die-Attach material</label>
                        </div>
                        <div class="quiz-answer">
                            <input type="checkbox" name="quiz1[delamination][mc]" id="quiz1-delamination-mc" value="Mold Compound" />
                            <label for="quiz1-delamination-mc">Mold Compound</label>
                        </div>
                        <div class="quiz-answer">
                            <input type="checkbox" name="quiz1[delamination][bsm]" id="quiz1-delamination-bsm" value="Back-Side Metallization" />
                            <label for="quiz1-delamination-bsm">Back-Side Metallization</label>
                        </div>
                        <div class="quiz-answer">
                            <input type="checkbox" name="quiz1[delamination][others]" id="quiz1-delamination-others" value="1" />
                            <label for="quiz1-delamination-others">Others please specify</label>
                            <input type="text" name="quiz1[delamination][others_text]" value=""/>
                        </div>
                    </div>
                </div>

                <div class="quiz1-panel">
                    <input type="checkbox" name="quiz1[ftv][q]" id="quiz1-ftv-q" value="1" />
                    <label for="quiz1-ftv-q">What is freeze-thaw-void (FTV)?</label>
                    <div class="sub-chk-section">
                        <div class="quiz-answer">
                            <input type="checkbox" name="quiz1[ftv][syringe]" id="quiz1-ftv-syringe" value="Void in syringe" />
                            <label for="quiz1-ftv-syringe">Void in syringe</label>
                        </div>
                        <div class="quiz-answer">
                            <input type="checkbox" name="quiz1[ftv][dm]" id="quiz1-ftv-dm" value="Void in dispense material" />
                            <label for="quiz1-ftv-dm">Void in dispense material</label>
                        </div>
                        <div class="quiz-answer">
                            <input type="checkbox" name="quiz1[ftv][curing]" id="quiz1-ftv-curing" value="Void after curing" />
                            <label for="quiz1-ftv-curing">Void after curing</label>
                        </div>
                        <div class="quiz-answer">
                            <input type="checkbox" name="quiz1[ftv][none]" id="quiz1-ftv-none" value="None of the above" />
                            <label for="quiz1-ftv-none">None of the above</label>
                        </div>
                    </div>
                </div>

                <div class="quiz1-panel">
                    <input type="checkbox" name="quiz1[ftv-cause][q]" id="quiz1-ftv-cause-q" value="1" />
                    <label for="quiz1-ftv-cause-q">What is the cause of FTV?</label>
                    <div class="sub-chk-section">
                        <div class="quiz-answer">
                            <input type="checkbox" name="quiz1[ftv-cause][wst]" id="quiz1-ftv-cause-wst" value="Wrong storage temperature" />
                            <label for="quiz1-ftv-cause-wst">Wrong storage temperature</label>
                        </div>
                        <div class="quiz-answer">
                            <input type="checkbox" name="quiz1[ftv-cause][hbh]" id="quiz1-ftv-cause-hbh" value="Handling by bare hands" />
                            <label for="quiz1-ftv-cause-hbh">Handling by bare hands</label>
                        </div>
                        <div class="quiz-answer">
                            <input type="checkbox" name="quiz1[ftv-cause][tno]" id="quiz1-ftv-cause-tno" value="Thawing near an oven" />
                            <label for="quiz1-ftv-cause-tno">Thawing near an oven</label>
                        </div>
                        <div class="quiz-answer">
                            <input type="checkbox" name="quiz1[ftv-cause][all]" id="quiz1-ftv-cause-all" value="All of the above" />
                            <label for="quiz1-ftv-cause-all">All of the above</label>
                        </div>
                    </div>
                </div>

                <div class="quiz1-panel">
                    <input type="checkbox" name="quiz1[formulation][q]" id="quiz1-formulation-q" value="1" />
                    <label for="quiz1-formulation-q">Will FTV formations cause a material's formulation change?</label>
                    <div class="sub-chk-section">
                        <div class="quiz-answer">
                            <input type="checkbox" name="quiz1[formulation][yes]" id="quiz1-formulation-yes" value="Yes" />
                            <label for="quiz1-formulation-yes">Yes</label>
                        </div>
                        <div class="quiz-answer">
                            <input type="checkbox" name="quiz1[formulation][no]" id="quiz1-formulation-no" value="No" />
                            <label for="quiz1-formulation-no">No</label>
                        </div>
                        <div class="quiz-answer">
                            <input type="checkbox" name="quiz1[formulation][maybe]" id="quiz1-formulation-maybe" value="May be" />
                            <label for="quiz1-formulation-maybe">May be</label>
                        </div>
                    </div>
                </div>
            </div>


            <div class="mt-5">
                <div class="font-weight-bold">2. Please specify and Henkel Product Highlights you are interested in:</div>
                <div class="form-group">
                    <input type="text" class="form-control" name="quiz2" value="{{ old('quiz2') }}">
                </div>
            </div>
            <div class="mt-5">
                <div class="font-weight-bold">3. What specific topic do expect to be discussed during the training?</div>
                <div class="form-group">
                    <input type="text" class="form-control" name="quiz3" value="{{ old('quiz3') }}">
                </div>
            </div>
            <div class="form-group mt-5">
                <div class="col-sm-12 text-center">
                    <input type="submit" name="submit" class="btn btn-primary" value="Register">
                </div>
            </div>
        </form>
    </div>

@endsection