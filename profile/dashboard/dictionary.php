<?php
include("header.php");
?>

<div class="container mt-5">
     <h1 class="text-center">शब्दकोश</h1>
     <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="input-group mb-3">
                <input type="text" class="form-control" id="word" placeholder="Enter a word" >
                <div class="input-group-append">
                    <button class="btn btn-primary" onclick="lookupWord()" >Lookup</button>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                        <div class="container">
                            <div class="word-meaning">
                                 <h1 id="main-word">विचार</h1>
                                 <em><h5 id="pron">/aɪˈdiə/</h5></em> के अनुसार
                             </div><h3 id="अर्थ">विचार</h3>
                             <h2 style="justify-content: left; text-align: left; padding-left: 2em;">
                             <h3><font color="#2e7d32">संज्ञा</font></h3><strong>
                                 <font color="#000">1। सोच</font></strong><br>
                                 <font color="#000">संज्ञान के सामग्री</font><br>
                                 <font color="#000">मुख्य बात जे अहाँ सोचि रहल छी</font><br>
                                 <font color="#0B8FD6"><i> "ई नीक विचार नहि छल"</i></font><br>
                                 <font color="#0B8FD6"><i> "विचार हमर मोन मे कहियो नहि आयल"</i></font><br>
                                 <strong><font color="#000">2। मन</font></strong><br>
                                 <font color="#000">अपन इरादा</font><br>
                                 <font color="#000">अहाँ की करबाक इरादा रखैत छी</font><br>
                                 <font color="#0B8FD6"><i> "ओकरा मोन मे छल जे अपन पुरान गुरु केँ देखब"</i></font><br>
                                 <font color="#0B8FD6"><i> "खेल के विचार सब टुकड़ा के कैप्चर करनाय छै"</i></font><br>
                                 <strong><font color="#000">3। विचार</font></strong><br>
                                 <font color="#000">एकटा व्यक्तिगत दृष्टिकोण</font><br>
                                 <font color="#0B8FD6"><i> "हुनका एकटा विचार छनि जे हमरा सभ केँ हुनका पसिन नहि छनि"</i></font><br>
                                 <strong><font color="#000">4। अनुमान, अनुमान, अनुमान</font></strong><br>
                                 <font color="#000">मात्रा या डिग्री या मूल्य के अनुमानित गणना</font><br>
                                 <font color="#0B8FD6"><i> "एकटा अनुमान जे एकर की लागत होयत"</i></font><br>
                                 <font color="#0B8FD6"><i> "एकटा मोटा-मोटी विचार जे एहि मे कतेक समय लागत"</i></font><br><strong>
                                     <font color="#000">5। विषय, सुरीला विषय, संगीत विषय</font></strong><br>
                                     <font color="#000">(संगीत) कोनो संगीत रचनाक सुरीला विषय</font><br>
                                     <font color="#0B8FD6"><i> "विषयक घोषणा पहिल उपाय मे होइत अछि"</i></font><br>
                                     <font color="#0B8FD6"><i> "संगीतकार विचार उठा क' विस्तार स' बतौलनि"</i></font><br>
                                 </h2><br><h3>पर्यायवाची</h3><div class="synonyms"><a href="image">छवि</a>
                                 <a href=" #"> धारणा</a><a href=" परिकल्पना"> परिकल्पना</a>
                                 <a href=" #"> विश्वास</a><a href=" सिद्धांत"> सिद्धांत</a>
                                 <a href=" #"> अनुमान</a><a href=" समझ"> समझ</a>
                                 <a href=" #"> कथा</a><a href=" फैंसी"> आडंबरी</a>
                                 <a href=" #"> विचार</a>
                                 <a href=" #"> राय</a><a href=" छाप"> छाप</a>
                                 <a href=" #"> भाव</a></div><br>
                                 <h3>विपरीत शब्द</h3><div class="antonyms">
                                     <a href="#">वस्तु</a><a href=" form"> रूप</a>
                                     <a href=" #"> विषय</a><a href=" बात"> बात</a>
                                     <a href=" #"> यथार्थ</a>
                                     </div>
                            </div>
                </div>
            </div>
        </div>
         <div class="row justify-content-center mt-4">
        <div class="col-md-6">
            <h6 class="text-muted">Translate to:</h6>
            <select class="form-select" id="translationLanguage">
                <option value="en">English</option>
                <option value="ne">Maithali</option>
                <option value="mn">Nepali</option>
                <option value="newa">Nepal Bhasa (Newar)</option>
                <option value="magar">Magar</option>
                <option value="limbu">Limbu</option>
                <option value="tmg">Tamang</option>
                <option value="rai">Rai(Kiranti)</option>
                <option value="sherapa">Sherpa</option>
                <!-- Add more language options as needed -->
            </select>
        </div>
    </div>
    <div class="row justify-content-center mt-2">
        <div class="col-md-6">
            <p class="mt-3" id="translationResult"></p>
        </div>
    </div>
    </div>
</div>
<?php include("footer.php"); ?> 