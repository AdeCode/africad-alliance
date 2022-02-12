<template>
  <div>
    <div class="content">
      <svg
        width="100%"
        height="30%"
        id="svg"
        viewBox="0 0 1440 400"
        xmlns="http://www.w3.org/2000/svg"
        class="transition duration-300 ease-in-out delay-150"
      >
        <path
          d="M 0,400 C 0,400 0,200 0,200 C 167.59999999999997,242.26666666666668 335.19999999999993,284.53333333333336 514,272 C 692.8000000000001,259.46666666666664 
          882.8,192.13333333333333 1039,171 C 1195.2,149.86666666666667 1317.6,174.93333333333334 1440,200 C 1440,200 1440,
          400 1440,400 Z"
          stroke="none"
          stroke-width="0"
          fill="#ffffffff"
          class="transition-all duration-300 ease-in-out delay-150 path-0"
          transform="rotate(-180 720 200)"
        ></path>
      </svg>
      <img :src="getLogo()" alt="logo" id="home-landing-img" />
      <div class="bottom">
        <div class="top">
          <h2 header>Collaborations for Africa By Africans</h2>
          <p>
            We are building a vibrant community and
            value-chain-services-market-place for Engineers, Architects and
            Technical professionals in Africa
          </p>
          <p>We would love you to join our community of professionals.</p>
          <div class="form">
            <form @submit.prevent="onSubmit">
              <input 
                type="email" 
                name="email" 
                v-model="form.email" 
                placeholder="Email Address" 
                required
                class="input-mail"
               />
              <button type="submit">Get Started</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="foot">
      <div class="contact">
        Contact Us
        <span><img :src="getContactLogo()" alt="logo" /></span>
      </div>
    </div>
  </div>
</template>

<script>
import axios from 'axios'
export default {
  name: "Waitlist",
  data(){
      return{
          form:{
              email: '',
          }
      }
  },
  methods: {
    getLogo() {
      return "images/logo.png";
    },
    getContactLogo(){
        return "images/online.png"
    },
    onSubmit(){
        axios
        .post("/saveWaitlist", this.form)
        .then((response) => {
          const result = response.data;
          console.log(result);
          this.form.email = "";
        })
        .catch((error) => {
          console.error(error);
        });
    }
  },
};
</script>

<style>
body {
  background: rgba(94, 120, 165, 0.72);
  padding: 0;
  margin: 0;
  color: #ececeb;
  font-family: "Montserrat", sans-serif;
  box-sizing: border-box;
}
.content {
  width: 100%;
  height: 100%;
  position: relative;
}
.content img {
  width: 100%;
  height: 20%;
  position: absolute;
  top: 0;
  left: 0;
}

.content svg {
  height: 50%;
}
.bottom {
  padding: 0 20px;
  position: relative;
  top: 0;
}

button:hover {
  background-color: rgba(94, 120, 165, 0.72);
}
.foot {
  display: flex;
  justify-content: flex-end;
  margin: 20px;
}
.contact {
  background-color: rgba(236, 236, 235, 0.77);
  border-radius: 10px;
  color: #10316b;
  cursor: pointer;
  display: flex;
  align-items: center;
  padding: 2px 4px;
  font-size: 12px;
  font-weight: 500;
}
/* @media screen and (max-width: 768px) {

        } */
@media screen and (min-width: 1024px) {
  .content img {
    left: 80px;
  }
 
}

@media screen and (min-width: 1220px) {
  .bottom {
    position: absolute;
    top: 250px;
    left: 150px;
  }
}

@media screen and (max-width: 767px) {
  form {
    display: flex;
    flex-direction: column;
    margin: 35px 0;
  }
  input {
    height: 5vh;
    border: none;
    font-size: small;
    background-color: rgba(236, 236, 235, 0.77);
    padding: 10px;
    margin-bottom: 15px;
    border-radius: 10px;
  }
  input:focus {
    outline: none;
    background-color: rgba(236, 236, 235, 0.77) !important;
    border: 1px solid #10316b;
  }
  input::placeholder {
    text-align: center;
    font-weight: 500;
  }
  button {
    border: none;
    border-radius: 10px;
    background-color: #10316b;
    height: inherit;
    font-weight: 600;
    font-size: 15px;
    color: rgba(236, 236, 235, 0.77);
    cursor: pointer;
    padding: 18px;
  }
  .top p {
    line-height: 20px;
    margin-bottom: 5px;
    font-size: 15px;
    font-weight: 300;
  }
  .content svg{
    height: 50% !important;
  }
  svg path{
    height: 200px;
  }
  .content img{
    width: 50%;
    height: 13%;
  }
}
@media screen and (min-width: 768px) {
  .content {
    position: relative;
    width: 100%;
    height: 100%;
    color: #fff;
  }

  .content img {
    position: absolute;
    top: 0;
    left: 5%;
    width: 50%;
    height: 50%;
  }

  .low {
    position: fixed;
    background: darkmagenta;
    height: 50px;
    width: 100%;
    bottom: 0;
  }
  .bottom {
    position: absolute;
    top: 60%;
    left: 10%;
  }
  .top {
    width: 60%;
  }
  .top h2 {
    font-weight: 600;
    font-size: 50px;
    margin: 0;
    padding: 0;
  }
  .top p {
    line-height: 24px;
    margin-bottom: 5px;
    max-width: 80%;
  }
  .form {
    width: 80%;
    /* padding: 2px 5px;
    background: rgba(236, 236, 235, 0.77);
    border-radius: 20px;
    height: 7vh;
    display: flex;
    align-items: center; */
  }
  
  form {
    width: 100%;
    height: 6vh;
    padding: 10px 5px;
    border-radius: 20px;
    display: flex;
    justify-content: space-between;
    background: rgba(236, 236, 235, 0.77);
    margin-top: 10px;
  }
  input {
    height: inherit;
    border: none;
    font-size: large;
    background: inherit !important;
    border-radius: 10px;
    width: 75%;
  }

  input:focus {
    outline: none;
    background: rgba(236, 236, 235, 0.77);
  }

  button {
    border: none;
    border-radius: 20px;
    border-top-right-radius: 30px;
    border-bottom-right-radius: 30px;
    background-color: #10316b;
    height: inherit;
    width: 25%;
    color: rgba(236, 236, 235, 0.77);
    cursor: pointer;
  }
  .foot {
    display: flex;
    justify-content: flex-end;
    margin: 30px;
    position: fixed;
    bottom: 0;
    right: 20px;
    width: 100%;
  }
  .contact {
    background-color: rgba(236, 236, 235, 0.77);
    border-radius: 10px;
    color: #10316b;
    cursor: pointer;
    display: flex;
    align-items: center;
    padding: 5px;
    font-weight: 500;
  }
}
</style>