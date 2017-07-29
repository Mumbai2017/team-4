package com.example.darsh_shah.cfg;

import android.content.Intent;
import android.content.SharedPreferences;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.widget.TextView;

public class FirstScreen extends AppCompatActivity {
    SharedPreferences preferences;
    private TextView textView;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_first_screen);
        textView= (TextView) findViewById(R.id.tv_check);
        preferences=getSharedPreferences("CFG",MODE_PRIVATE);
        String check=preferences.getString("Login","");
        if(check.equalsIgnoreCase("login")){
            textView.setText("Directing ....");
            startActivity(new Intent(FirstScreen.this,MainActivity.class));

        }
        else{
            //go directly to second activity
        }
    }
}
