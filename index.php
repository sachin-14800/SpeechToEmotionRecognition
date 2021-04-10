<?php
// Running the python file using the shell command on terminal on backend
$output="";
$command = escapeshellcmd('python abc.py &');
  $output = shell_exec($command);
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
   <link rel="icon" href="logo.jpg" type = "image/x-icon">
  <title>Speech To Emotion Recognition</title>
  <link rel="stylesheet" href="style.css" type="text/css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

</head>
<body>
  <div class="text">
    <h2>
      <i class="fas fa-language"></i> Speech To Em<i class="far fa-laugh-beam bounce1"></i>ti<i class="fas fa-angry bounce2"></i>n Recognition
      <p class="mono">Note : The soundfile must be a monotone. Monotone refers to a sound, for example music or speech, that has a single unvaried tone.</p>

    </h2>
  </div>
  <!-- form to take the user's input-->
  <form action="upload.php" method="post" enctype="multipart/form-data">
    <div class=" box1">
      <div class="box2">
        <div class="image">
          <i class="far fa-file-audio"></i>
        </div>
        <input type="file" name="audioFile" class="file" />
        <button type="submit"  value="Upload Audio" name="save_audio" class="upload">Upload<i class="fas fa-angle-double-right"></i></button>
      </div>
    </div>
  </form>
  <hr class="hr" style="height:2px;border-width:0;color:gray;background-color:gray">
  <!-- Steps on which the MLP Classifier is working -->
  <div class="box">
  <h1 id="a4dc" class="steps" data-selectable-paragraph="">Step 1 — Libraries</h1>
  <div class="cont">
  <p id="a495">The libraries used are <ul><li>Soundfile - Soundfile is an audio library. It can read and write sound files.</li><li>Librosa - It is a python library for analyzing audio and music.</li><li>NumPy - NumPy is the fundamental package for array computing with Python.</li><li>Sklearn - Scikit-learn is a free software machine learning library for the Python programming language.</li></ul></p>
  </div>
  <h1 id="a4dc" class="steps" data-selectable-paragraph="">Step 2 — The Dataset</h1>
  <div class="cont">
  <p id="a495"><ul><li>The dataset being used is the RAVDEES dataset. This is the Ryerson Audio-Visual Database of Emotional Speech and Song dataset, and is free to download. This dataset has 7356 files rated by 247 individuals 10 times on emotional validity, intensity, and genuineness.</li></ul></p>
  </div>
  <h1 id="a4dc" class="steps" data-selectable-paragraph="">Step 3 — Extracting Features</h1>
  <div class="cont">
  <p id="a495"><ul><li>A function extracts features from audio recordings and return them as stack arrays in sequence horizontally using a numpy hstack method. There are many features of audio files. And some of them are MFCC, Chroma and Mel.</li></ul></p>
  </div>
  <h1 id="a4dc" class="steps" data-selectable-paragraph="">Step 4 — Loading and Preparing the Data</h1>
  <div class="cont">
  <p id="a495"><ul><li>In this step, we define a function to load our dataset. First, we are loading the data and then extracting the features using the function defined in the previous step. While features are extracting, we are assigning the features with the labels emotions.</li><li> Then, we are going to split the labeled dataset using the train_test_split() function. It is a well-known splitting function by Scikit-learn module. It divides the dataset into four chunks. We can define how much of the dataset we want to use for training and how much for testing.</li></ul></p>
  </div>
  <h1 id="a4dc" class="steps" data-selectable-paragraph="">Step 5 — MLP Classifier</h1>
  <div class="cont">
  <p id="a495"><ul><li>MLP Classifier is multi-layer perceptron classifier. It uses a neural network model to optimize the log-loss function using Limited memory BFGS or stochastic gradient descent. Then we fit our model.</li><li>After our model is fit, we move to the prediction step. The accuracy score function checks how many of the predicted values are matching with the original label data.</li></ul></p>
  </div>
  <h1 id="a4dc" class="final" data-selectable-paragraph="">Conclusion</h1>
  <div class="cont">
  <p id="a495"><ul><li>In this Python minor project, we learned to recognize emotions from speech. We used an MLPClassifier for this and made use of the soundfile library to read the sound file, and the librosa library to extract features from it.</li></ul></p>
  </div>
</div>
  <br>
  <br>
  <br>
  <br>


<hr class="hr" style="height:2px;border-width:0;color:gray;background-color:gray">

<!-- footer -->
  <div class="footer-dark">
        <footer>
          <div class="container-fluid" style="font-size: 20px;">
      <i class="social-icon fab fa-facebook-f"></i>
      <i class="social-icon fab fa-twitter"></i>
      <i class="social-icon fab fa-instagram"></i><br>
    </div>
            <div class="container">
                <pre class="copyright">Adwet Ojha     Rishika Patel     Sachin Gupta     Yashaswa Jain</pre>
            </div>
        </footer>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>
