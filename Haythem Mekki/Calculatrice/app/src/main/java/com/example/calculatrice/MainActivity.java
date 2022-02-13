package com.example.calculatrice;

import androidx.appcompat.app.AppCompatActivity;

import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.TextView;


public class MainActivity extends AppCompatActivity {
    private EditText n1,n2;
    private TextView res;
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        n1 = (EditText) findViewById(R.id.editTextTextPersonName);
        n2 = (EditText) findViewById(R.id.editTextTextPersonName2);
        Button somme = (Button) findViewById(R.id.somme);
        Button sous=(Button)findViewById(R.id.sous);
        Button multi=(Button)findViewById(R.id.multi);
        Button div=(Button)findViewById(R.id.div);
        res = (TextView) findViewById(R.id.res);
        somme.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                calcSomme();
            }
        });
        multi.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                calcMulti();
            }
        });
        div.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                calcDiv();
            }
        });
        sous.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                calcSous();
            }
        });

    }

    private void calcSomme() {
        String ch1 = n1.getText().toString();
        String ch2 = n2.getText().toString();

        int a = Integer.parseInt(ch1);
        int b = Integer.parseInt(ch2);

        int s = a+b;

        res.setText(String.valueOf(s));

    }
    private void calcMulti() {
        String ch1 = n1.getText().toString();
        String ch2 = n2.getText().toString();

        int a = Integer.parseInt(ch1);
        int b = Integer.parseInt(ch2);

        int s = a*b;

        res.setText(String.valueOf(s));

    }
    private void calcDiv() {
        String ch1 = n1.getText().toString();
        String ch2 = n2.getText().toString();

        int a = Integer.parseInt(ch1);
        int b = Integer.parseInt(ch2);

        int s = a/b;

        res.setText(String.valueOf(s));

    }
    private void calcSous() {
        String ch1 = n1.getText().toString();
        String ch2 = n2.getText().toString();

        int a = Integer.parseInt(ch1);
        int b = Integer.parseInt(ch2);

        int s = a-b;

        res.setText(String.valueOf(s));

    }
}