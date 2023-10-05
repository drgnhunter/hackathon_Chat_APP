<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">


    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body>
    <div style="background-color: #444654;" class=" w-screen h-screen">
        <button id="menuBtn" class=" text-2xl pl-4 z-40 fixed top-0 text-white">
            <i class="bi bi-list"></i>
        </button>

        <div class=" z-0">

            <div style="background-color: #343541;" class=" px-5 py-3 pb-3 text-white  h-auto userChat">
                <div class=" grid grid-flow-row grid-cols-12">
                    <div class=" col-span-3  md:pl-36">
                        <img class=" w-20 h-20" src="Assets/admin.png" />
                    </div>
                    <div class=" col-span-9">
                        <p>Q2. AI-Powered Customer Support Chatbot Background: The goal is to develop a web-based chatbot system using PHP, a relational database (e.g., MySQL), and natural language processing (NLP) libraries to provide efficient and effective customer support to users. This scenario will test your team's PHP development skills, database management, and chatbot implementation abilities. Challenge: Your team's task is to build an AI-powered customer support chatbot system with the following functionalities: 1. User Registration and Authentication: Implement user registration and login functionalities to allow users to create accounts and securely access their profiles. 2. Chatbot Interface: Create a chatbot interface that allows users to interact with the chatbot. Users should be able to ask questions, seek assistance, or report issues. 3. Database Integration: Use a database to store user profiles, chat histories, and frequently asked questions (FAQs). 4. NLP Integration: Integrate natural language processing (NLP) libraries or APIs (e.g., NLTK, spaCy) to enable the chatbot to understand and respond to user queries intelligently. 5. User Profiles: Allow users to provide and update their personal information through the chatbot interface. 6. FAQ Integration: Include a feature where users can access frequently asked questions and receive relevant answers from the chatbot. 7. Real-Time Chat: Enable real-time chat functionality, ensuring that users receive prompt responses from the chatbot. 8. Escalation to Human Agents: Implement a feature that allows the chatbot to escalate complex queries or issues to human customer support agents when necessary. </p>

                    </div>
                </div>

            </div>
            <div style="background-color: #444654;" class=" px-5 py-3 text-white  h-auto  botChat">
                <div class=" grid grid-flow-row grid-cols-12">
                    <div class=" col-span-3  md:pl-36">
                        <img class=" w-20 h-20" src="Assets/admin.png" />
                    </div>
                    <div class=" col-span-9">
                        <p>Q2. AI-Powered Customer Support Chatbot Background: The goal is to develop a web-based chatbot system using PHP, a relational database (e.g., MySQL), and natural language processing (NLP) libraries to provide efficient and effective customer support to users. This scenario will test your team's PHP development skills, database management, and chatbot implementation abilities. Challenge: Your team's task is to build an AI-powered customer support chatbot system with the following functionalities: 1. User Registration and Authentication: Implement user registration and login functionalities to allow users to create accounts and securely access their profiles. 2. Chatbot Interface: Create a chatbot interface that allows users to interact with the chatbot. Users should be able to ask questions, seek assistance, or report issues. 3. Database Integration: Use a database to store user profiles, chat histories, and frequently asked questions (FAQs). 4. NLP Integration: Integrate natural language processing (NLP) libraries or APIs (e.g., NLTK, spaCy) to enable the chatbot to understand and respond to user queries intelligently. 5. User Profiles: Allow users to provide and update their personal information through the chatbot interface. 6. FAQ Integration: Include a feature where users can access frequently asked questions and receive relevant answers from the chatbot. 7. Real-Time Chat: Enable real-time chat functionality, ensuring that users receive prompt responses from the chatbot. 8. Escalation to Human Agents: Implement a feature that allows the chatbot to escalate complex queries or issues to human customer support agents when necessary. </p>

                    </div>
                    <div class="col-span-12 invisible ">
                        <p>Q2. AI-Powered Customer Support Chatbot Background: The goal is to develop a web-based chatbot system using PHP, a relational database (e.g., MySQL), and natural language processing (NLP) libraries to provide efficient and effective customer support to users. This scenario will test your team's PHP development skills, database management, and chatbot implementation abilities. </p>
                    </div>
                </div>

            </div>


            <div class=" z-10 relative ">
                <div class="fixed bottom-0 w-full bg-white p-4 shadow-lg flex items-center">
                    <input class="w-full p-2 mr-2 border rounded-lg" type="text" placeholder="Type your message..." />
                    <button class="text-blue-500 hover:text-blue-700">
                        <i class="bi bi-send-fill text-xl text-black"></i>
                    </button>
                </div>

            </div>
        </div>
        <div id="menuBar" class=" invisible grid grid-flow-row grid-cols-12 z-30 fixed top-0 w-full   shadow-lg">
            <div style="background-color: #202123;" class=" pl-4 pt-10 col-span-12 md:col-span-3 h-screen ">
                <button type="button" class=" mb-2 btn btn-outline-light flex flex-row">
                    <i class="bi bi-plus"></i><label>New Chat</label>
                </button>
                <div class=" text-white mb-2">
                    <label>Chat</label>
                </div>
                <hr class=" border border-white" />
                <div class=" py-2 flex flex-row items-center text-white">
                    <i class="bi bi-chat-left mr-10"></i>
                    <label class=" mr-10">Ai_Powered ChatBot</label>
                    <div class=" flex flex-row items-end">
                        <i class="bi bi-pencil mr-4"></i>
                        <i class="bi bi-trash"></i>
                    </div>

                </div>
                <div class=" py-2 flex flex-row items-center text-white">
                    <i class="bi bi-chat-left mr-10"></i>
                    <label class=" mr-10">Ai_Powered ChatBot</label>
                    <i class="bi bi-pencil mr-4"></i>
                    <i class="bi bi-trash"></i>
                </div>
                <div class=" py-2 flex flex-row items-center text-white">
                    <i class="bi bi-chat-left mr-10"></i>
                    <label class=" mr-10">Ai_Powered ChatBot</label>
                    <i class="bi bi-pencil mr-4"></i>
                    <i class="bi bi-trash"></i>
                </div>
            </div>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="chat.js"></script>
</body>

</html>