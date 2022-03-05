@extends('layouts.admin')

@section('main-content')
@section('chats.chat', 'class=active')
@if (Session::has('alert'))
<div class="alert alert-{{ session('alert') }}">{{ session('res') }}</div>
@endif
<div class="container-fluid p-h-0">
    <div class="chat chat-app row">
        <div class="chat-list">
            <div class="chat-user-tool">
                <i class="anticon anticon-search search-icon p-r-10 font-size-20"></i>
                <input placeholder="Search...">
            </div>
            <div class="chat-user-list" id="chat-user-list">
                {{-- <a class="chat-list-item p-h-25" href="javascript:void(0);">
                    <div class="media align-items-center">
                        <div class="avatar avatar-image">
                            <img src="assets/images/avatars/thumb-1.jpg" alt="">
                        </div>
                        <div class="p-l-15">
                            <h5 class="m-b-0">Erin Gonzales</h5>
                            <p class="msg-overflow m-b-0 text-muted font-size-13">
                                Wow, that was cool!
                            </p>
                        </div>
                    </div>
                </a> --}}
            </div>
        </div>
        <div class="chat-content">
            <div class="conversation">
                <div class="conversation-wrapper">
                    <div class="conversation-header justify-content-between">
                        <div class="media align-items-center">
                            <a href="javascript:void(0);"
                                class="chat-close m-r-20 d-md-none d-block text-dark font-size-18 m-t-5">
                                <i class="anticon anticon-left-circle"></i>
                            </a>
                            <div class="avatar avatar-image">
                                <img id="user-image" src="" alt="">
                            </div>
                            <div class="p-l-15">
                                <h6 class="m-b-0" id="user-name"></h6>
                                <p class="m-b-0 text-muted font-size-13 m-b-0">
                                    <span class="badge badge-success badge-dot m-r-5"></span>
                                    <span>Online</span>
                                </p>
                            </div>
                        </div>
                        <div class="dropdown dropdown-animated scale-left">
                            <a class="text-dark font-size-20" href="javascript:void(0);" data-toggle="dropdown">
                                <i class="anticon anticon-setting"></i>
                            </a>
                            <div class="dropdown-menu">
                                <button class="dropdown-item" type="button">Action</button>
                                <button class="dropdown-item" type="button">Another action</button>
                                <button class="dropdown-item" type="button">Something else here</button>
                            </div>
                        </div>
                    </div>
                    <div class="conversation-body" id="conversation-body">
                    </div>
                    <div class="conversation-footer">
                        <input class="chat-input" type="text" placeholder="Type a message..." id="chat-input">
                        <ul class="list-inline d-flex align-items-center m-b-0">
                            <li class="list-inline-item m-r-15">
                                <a class="text-gray font-size-20" href="javascript:void(0);" data-toggle="tooltip"
                                    title="Emoji">
                                    <i class="anticon anticon-smile"></i>
                                </a>
                            </li>
                            <li class="list-inline-item m-r-15">
                                <a class="text-gray font-size-20" href="javascript:void(0);" data-toggle="tooltip"
                                    title="Attachment">
                                    <i class="anticon anticon-paper-clip"></i>
                                </a>
                            </li>
                            <li class="list-inline-item" id="chat-submit-button">
                                <button class="d-none d-md-block btn btn-primary">
                                    <span class="m-r-10">Send</span>
                                    <i class="far fa-paper-plane"></i>
                                </button>
                                <a href="javascript:void(0);" class="text-gray font-size-20 d-md-none d-block">
                                    <i class="far fa-paper-plane"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@section('page-js')
{{-- <script src="{{asset('assets/js/pages/chat.js')}}"></script> --}}

@endsection

<script src="https://www.gstatic.com/firebasejs/8.10.0/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.10.0/firebase-firestore.js"></script>

<script type="text/javascript" language="javascript">
    // import { initializeApp } from "https://www.gstatic.com/firebasejs/9.6.7/firebase-app.js";
    // import { getAnalytics } from "https://www.gstatic.com/firebasejs/9.6.7/firebase-analytics.js";
    // import { getFirestore } from "https://www.gstatic.com/firebasejs/9.6.7/firebase-firestore.js";

    const firebaseConfig = {
      apiKey: "AIzaSyBjk3WDM6NG3qdNefa6IWhOYjA0NrGGIFs",
      authDomain: "jobs-today-cac62.firebaseapp.com",
      projectId: "jobs-today-cac62",
      storageBucket: "jobs-today-cac62.appspot.com",
      messagingSenderId: "729419913211",
      appId: "1:729419913211:web:96900c005675cb677c1d5e",
      measurementId: "G-PC911EDNKS"
    };

    // Initialize Firebase
    const app = firebase.initializeApp(firebaseConfig);
    var db = firebase.firestore();
    const docRef = db.collection('chats')
    var chats = [];

    function enterChat(id) {
        document.getElementById("chat-input").value = '';
        const chat = chats.find(chat=>chat.id==id).data
        let messages = ``;
        chat.messages.map(message => {
            if (message.sent_by === 'admin') {
                messages += `<div class="msg msg-sent">
                                <div class="bubble">
                                    <div class="bubble-wrapper">
                                        <span>${message.message}</span>
                                    </div>
                                </div>
                            </div>`;
            }else if (message.sent_by === 'user'){
                messages += `<div class="msg msg-recipient">
                                <div class="bubble">
                                    <div class="bubble-wrapper">
                                        <span>${message.message}</span>
                                    </div>
                                </div>
                            </div>`;
            }
        })

        document.getElementById("user-image").src = `{{asset("storage/app")}}/${chat.user.image}`
        document.getElementById("user-name").innerText = chat.user.name
        document.getElementById("conversation-body").innerHTML = messages

        var old_element = document.getElementById("chat-submit-button");
        var new_element = old_element.cloneNode(true);
        old_element.parentNode.replaceChild(new_element, old_element);
        document.getElementById("chat-submit-button").addEventListener("click",() => sendMessage(id))
    }

    function sendMessage(id) {
        const chatInput = document.getElementById("chat-input").value;
        if (chatInput.length>0) {
            const chat = chats.find(chat=>chat.id==id).data
            docRef.doc(id).update({
                messages:[
                    ...chat.messages,
                    {
                        sent_by:"admin",
                        message:chatInput,
                        created_at:new Date().toLocaleString()
                    }
                ]
            })
            .then(() => {
                console.log("Document successfully written!");
                document.getElementById("chat-input").value = '';
            })
            .catch((error) => {
                console.error("Error writing document: ", error);
            });
        }
    }

    function showingUserList() {
        document.querySelector('#chat-user-list').innerHTML = '';
        docRef.onSnapshot(async (snapshot) => {
            snapshot.forEach(async (doc) => {
                chats.push({id:doc.id,data:doc.data()})
                document.querySelector('#chat-user-list').innerHTML += `<a class="chat-list-item p-h-25" onClick="enterChat(${doc.id})">
                    <div class="media align-items-center">
                        <div class="avatar avatar-image">
                            <img src="{{asset("storage/app")}}/${doc.data().user.image}" alt="">
                        </div>
                        <div class="p-l-15">
                            <h5 class="m-b-0">${doc.data().user.name}</h5>
                        </div>
                    </div>
                </a>`;
            });
            enterChat(chats[chats.length-2].id)
        })
    }

    showingUserList()

</script>
@endsection
