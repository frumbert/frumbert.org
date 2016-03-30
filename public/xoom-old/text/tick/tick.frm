VERSION 5.00
Begin VB.Form Form1 
   BorderStyle     =   1  'Fixed Single
   Caption         =   "Perser with time-related function"
   ClientHeight    =   6375
   ClientLeft      =   45
   ClientTop       =   330
   ClientWidth     =   8775
   LinkTopic       =   "Form1"
   MaxButton       =   0   'False
   ScaleHeight     =   6375
   ScaleWidth      =   8775
   StartUpPosition =   3  'Windows Default
   Begin VB.ListBox List1 
      Height          =   1620
      Left            =   120
      TabIndex        =   9
      Top             =   4200
      Width           =   8415
   End
   Begin VB.TextBox text3 
      Alignment       =   2  'Center
      Appearance      =   0  'Flat
      BackColor       =   &H80000004&
      BorderStyle     =   0  'None
      Height          =   255
      Left            =   3600
      TabIndex        =   7
      Top             =   480
      Width           =   4935
   End
   Begin VB.HScrollBar HScroll1 
      Height          =   255
      Left            =   120
      TabIndex        =   3
      Top             =   480
      Width           =   2895
   End
   Begin VB.TextBox Text2 
      Height          =   375
      Left            =   120
      TabIndex        =   2
      Top             =   5880
      Width           =   7215
   End
   Begin VB.CommandButton Command1 
      Caption         =   "Add Text"
      Height          =   375
      Left            =   7440
      TabIndex        =   1
      Top             =   5880
      Width           =   1215
   End
   Begin VB.TextBox Text1 
      Height          =   3255
      Left            =   120
      Locked          =   -1  'True
      MultiLine       =   -1  'True
      ScrollBars      =   2  'Vertical
      TabIndex        =   0
      Top             =   840
      Width           =   8535
   End
   Begin VB.Timer Timer1 
      Interval        =   1000
      Left            =   3120
      Top             =   360
   End
   Begin VB.Label Label4 
      Alignment       =   2  'Center
      Caption         =   "Passing of Time"
      Height          =   255
      Left            =   3720
      TabIndex        =   8
      Top             =   240
      Width           =   4815
   End
   Begin VB.Label Label3 
      Caption         =   "TIME VALUE:"
      Height          =   255
      Left            =   840
      TabIndex        =   6
      Top             =   120
      Width           =   1695
   End
   Begin VB.Label Label2 
      Caption         =   "Fast"
      Height          =   255
      Left            =   2640
      TabIndex        =   5
      Top             =   120
      Width           =   375
   End
   Begin VB.Label Label1 
      Caption         =   "Slow"
      Height          =   255
      Left            =   120
      TabIndex        =   4
      Top             =   120
      Width           =   495
   End
End
Attribute VB_Name = "Form1"
Attribute VB_GlobalNameSpace = False
Attribute VB_Creatable = False
Attribute VB_PredeclaredId = True
Attribute VB_Exposed = False
Private Sub Command1_Click()
   If Text2.Text = "" Then 'needs something in the box
     Exit Sub
   End If
   If List1.ListCount > 8 Then
     List1.Clear
   End If
Text2.Text = LCase(Text2.Text) + " " ' in case of a single word - excludes another if..then
directions = "east e west w south s north n northeast ne southeast se northwest nw southwest sw up u down d right r left l forward f back b" ' set up words it looks for in the input
howlong = Len(Text2.Text) ' length of text entered
firstspace = InStr(1, Text2.Text, " ") ' looks for the first word entered
firstword = Mid(Text2.Text, 1, firstspace - 1) ' returns the first word
matchword = InStr(1, directions, firstword) ' sees if first word is a direction

Select Case firstword ' if single letters used, parses them into whole words (unoptimised method - will change in later revision)
Case "n"
  Text2.Text = "north"
Case "s"
  Text2.Text = "south"
Case "e"
  Text2.Text = "east"
Case "w"
  Text2.Text = "west"
Case "ne"
  Text2.Text = "northease"
Case "nw"
  Text2.Text = "northwest"
Case "se"
  Text2.Text = "southeast"
Case "sw"
  Text2.Text = "southwest"
Case "u"
  Text2.Text = "up"
Case "d"
  Text2.Text = "down"
Case "r"
  Text2.Text = "right"
Case "l"
  Text2.Text = "left"
Case "f"
  Text2.Text = "forward"
Case "b"
  Text2.Text = "back"
End Select

If matchword > 0 Then  ' adds to list or text box according to whether matchword returned true or false
  addlist = ""
  Select Case Int(3 * Rnd)
  Case 1
   addlist = "Picking up your pack, you decide to head"
  Case 2
   addlist = "You head"
  Case 3
   addlist = "You slowly meander"
  Case Else
   addlist = "You go"
  End Select
  addlist = addlist + " " + Text2.Text + ". "
  List1.AddItem addlist
  Text2.Text = "" ' remember to clear out box for next entry
  Text2.SetFocus
Else
  Select Case Int((3 * Rnd) + 1) ' this adds a random line in the text area saying something can't be done
   Case 1
    Text1.Text = Text1.Text + "You try to " + firstword + ", but find you cannot."
   Case 2
    Text1.Text = Text1.Text + "As much as you would like to " + firstword + ", you just can't seem to do it."
   Case 3
    Text1.Text = Text1.Text + "You can't " + firstword + " here!"
  End Select

  Text2.Text = "" ' remember to clear out box for next entry
  Text2.SetFocus
End If

End Sub
Private Sub Form_Load()
  Timer1.Interval = 1000
  HScroll1.Min = 100
  HScroll1.Max = 10000
  HScroll1.Value = 5000
' Text2.SetFocus - should work but doesn't.. oh well

End Sub
Private Sub HScroll1_Change()
  Timer1.Interval = 10000 - HScroll1.Value
End Sub
Private Sub Timer1_Timer()
   If (Len(Text1.Text) > 1760) Then ' housekeeping - stops need to scroll text box
     Text1.Text = ""
   End If
   If (Len(text3.Text) > 30) Then ' again, housekeeping for timer display
     text3.Text = ""
   End If
   
   text3.Text = "<" + text3.Text + ">" ' cute, will be removed in later revision
 
   If Int((10 * Rnd) + 1) < 2 Then ' works out if it should add a sentence or not (random)
     Select Case Int((6 * Rnd) + 1) ' if so, pick a random sentance start to use
     Case 1
       Text1.Text = Text1.Text + "The "
       temp = ""
       Select Case Int((3 * Rnd) + 1) ' pick a random body
        Case 1
         temp = "sun warms your face"
        Case 2
         temp = "breeze cools your face"
        Case 3
         temp = "clouds part, sunlight streaming against your whole body"
       End Select
       Text1.Text = Text1.Text + temp
     Case 2
       Text1.Text = Text1.Text + "You can "
       temp = ""
       Select Case Int((3 * Rnd) + 1) ' pick a random body
        Case 1
         temp = "hear the far-off trill of birdsong"
        Case 2
         temp = "see shapes in the clouds"
        Case 3
         temp = "see an ant, battling to drag a leaf along the ground"
       End Select
       Text1.Text = Text1.Text + temp
     Case 3
       Text1.Text = Text1.Text + "In the distance "
       temp = ""
       Select Case Int((3 * Rnd) + 1) ' pick a random body
        Case 1
         temp = "a dog barks"
        Case 2
         temp = "you hear a vehicle. The sounds soon fades away"
        Case 3
         temp = "somebody looks towards you, but then moves on"
       End Select
       Text1.Text = Text1.Text + temp
     Case 4
       Text1.Text = Text1.Text + "A breeze stirs "
       temp = ""
       Select Case Int((3 * Rnd) + 1) ' pick a random body
        Case 1
         temp = "leaves at your feet"
        Case 2
         temp = "and then settles again"
        Case 3
         temp = "and you feel its cool energy pour into your body once more"
       End Select
       Text1.Text = Text1.Text + temp
     Case 5
       Text1.Text = Text1.Text + "You feel "
       temp = ""
       Select Case Int((3 * Rnd) + 1) ' pick a random body
        Case 1
         temp = "a little bored, and wander around aimlessly"
        Case 2
         temp = "strange, but the feeling passes quickly"
        Case 3
         temp = "something against your foot, but you can see nothing there"
       End Select
       Text1.Text = Text1.Text + temp
     Case 6
       Text1.Text = Text1.Text + "You feel time passing.........." ' didn't pick a random sentance to use
     Case Else
       Text1.Text = Text1.Text + "" ' didn't pick anything
     End Select
       Text1.Text = Text1.Text + ". " ' add punctuation last.
   End If
'we could do a function that punctuates for us - later revision
   Label3.Caption = "Tick: " + Str(Timer1.Interval / 1000) + " sec" ' update timer display

End Sub
