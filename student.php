
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="student.css">
    <title>Personal Infos</title>
</head>

<body>
    <div class="wrapper-form">
        <form role="form">
            <div class="input-container">
                <label for="p-full-name" class="title">Full Name :</label>
                <input type="text" id="p-full-name" name="p-full-name">
                <small id="error-message"></small>
            </div>
            <div class="input-container">
                <label for="p-organization" class="title">Institute/Organization :</label>
                <input type="text" id="p-organization" name="p-organization">
                <small id="error-message"></small>
            </div>

            <div class="select-container">
                <label for="profile" class="profile-title">Profile </label><br>
                <select id="profile" name="profile">
                    <option id="student" value="student">Student</option>
                    <option id="engineer" value="engineer">Engineer</option>
                    <option id="PhD-student" value="PhD-student">PhD student</option>
                    <option id="PhD" value="PhD">PhD</option>
                    <option id="industrial" value="industrial">Industrial</option>
                    <option id="professor" value="professor">Professor</option>
                    <option id="academic" value="academic">Academic</option>
                </select>
                <small id="error-message"></small>
            </div>
            <div class="input-container">
                <label for="p-phone" class="title">Phone Number :</label>
                <input type="tel" id="p-phone" name="p-phone">
                <small id="error-message"></small>
            </div>
            <div class="input-container">
                <label for="p-email" class="title">Email Address :</label>
                <input type="text" id="p-email" name="p-email">
                <small id="error-message"></small>
            </div>
            <div class="input-container">
                <label for="p-country" class="title">Country :</label>
                <input type="text" id="p-country" name="p-country">
                <small id="error-message"></small>
            </div>
            <div class="input-container">
                <label class="title">YRD Training :</label><br>
                <small class="small-description">For selected candidates for the YRD event, they are obliged to
                    tick all the boxes to receive the training registration links</small> <br> 
                <small class="small-description">(For other participants: Min: 1 box)</small><br>
                <input type="checkbox" id="technology-transfer" value="technology-transfer" name="technology-transfer"><label for="technology-transfer">Intellectual
                    property and technology transfer</label><br>
                <input type="checkbox" id="communication" value="communication" name="communication"><label for="communication">Communication
                    strategy</label><br>
                <input type="checkbox" id="entrepreneur" value="entrepreneur" name="entrepreneur"><label for="entrepreneur">Entrepreneur Mindset</label><br>
                <input type="checkbox" id="business-model" value="business-model" name="business-model"><label for="business-model">Innovation Business
                    Model</label><br>
                <input type="checkbox" id="game" value="game" name="game"><label for="game">Interactive game</label><br>
            </div>
            <div class="input-container">
                <label class="title">ICP Sessions :</label><br>
                <small class="small-description">For selected candidates for the ICP event, they are obliged to tick
                    the boxes corresponding to their sessions to receive the session registration link</small> <br>
                <small class="small-description">(For other participants: Min: 1 box)</small><br>
                <input type="checkbox" id="phosphate-mining" value="phosphate-mining" name="phosphate-mining"><label for="phosphate-mining">Phosphate Mining
                    Value Chain</label><br>
                <input type="checkbox" id="sustainable-mining" value="sustainable-mining" name="sustainable-mining"><label for="sustainable-mining">Sustainable
                    Mining</label><br>
                <input type="checkbox" id="chemistry" value="chemistry" name="chemistry"><label for="chemistry">Chemistry, Processes and
                    Materials</label><br>
                <input type="checkbox" id="fluid-modeling" value="fluid-modeling" name="fluid-modeling"><label for="fluid-modeling">Complex Fluids
                    Modeling</label><br>
                <input type="checkbox" id="agriculture" value="agriculture" name="agriculture"><label for="agriculture">Agriculture and
                    Biotechnology</label><br>
                <input type="checkbox" id="settlement-planning" value="settlement-planning" name="settlement-planning"><label for="settlement-planning">Industrial Site and
                    Settlement Planning</label><br>
            </div>
            <div class="input-container">
                <label class="title">ICP Plenary Talks :</label><br>  
                <input type="checkbox" id="science-history" value="science-history" name="science-history" checked required><label for="science-history">Science
                    History</label><br>
                <input type="checkbox" id="mineral-resources" value="mineral-resources" name="mineral-resources" checked required><label for="mineral-resources">Mineral
                    resources and challenges of the mining industry in Africa</label><br>
                <input type="checkbox" id="planetary-evolution" value="planetary-evolution" name="planetary-evolution" checked required><label for="planetary-evolution">Planetary
                    evolution from the hydrogeological and mineralogical perspective</label><br>
                <input type="checkbox" id="emerging-role" value="emerging-role" name="emerging-role" checked required><label for="emerging-role">The emerging role of
                    geometallurgy in enhancing circular mining economy approaches</label><br>
                <input type="checkbox" id="degrading-soils" value="degrading-soils" name="degrading-soils" checked required><label for="degrading-soils">Adopting
                    agriculture to degrading soils and changing climate in Africa</label><br>
            </div>
            <div class="input-container">
                <label class="title">ICP Workshops :</label><br>
                <small class="small-description">(Min : 1 box)</small><br>
                <input type="checkbox" id="workshop-one" value="workshop-one" name="workshop-one" ><label for="workshop-one">Planning and
                    control of ports activities: focus on bulk ports in the era of industry 4.0</label><br>
                <input type="checkbox" id="workshop-two" value="workshop-two" name="workshop-two"><label for="workshop-two">Sustainable
                    development of nanotechnogy in agriculture</label><br>
            </div>
            <button id="submit" class="submit" type="submit">SUBMIT</button>    
        </form>
    </div>
    <script src="student.js"></script>
</body>

</html>